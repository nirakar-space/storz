<?php
require_once APP_PATH."/class/src/instamojo.php";

class ProductController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
      $item=Item::find();
      //echo '<pre>';
      foreach ($item as $k=>$v) {
       $itm['id']=$v->id;
       $itm['name']=$v->name;
       $itm['price']=$v->price;
       $itm['description']=$v->description;
       $itm['image']=$v->image_name;
       $items[]=$itm;
      }
      $this->view->items=(object)$items;
      $this->view->baseurl=BASE_URL;
      $this->view->imgpath=BASE_PATH."/public/img/";
    }


   public function cartAction($id){
        // echo '<pre>';
        $item=Item::findFirst("id={$id}");
        $coupon=Coupon::find();
        foreach ($coupon as $key => $val) {
          $c['id']=$val->id;
          $c['name']=$val->name;
          $c['amount']=$val->amount;
          $cpn[]=$c;
        }
        $this->view->item=$item;
        $this->view->coupons=(object)$cpn;
        $this->view->baseurl=BASE_URL;
   }

public function orderAction(){
echo '<pre>';
$data=$this->request->getPost();
$api = new Instamojo\Instamojo('test_77056bcad8638a5452046b92c94', 'test_186d5bda05b60deaf8687afedc0','https://test.instamojo.com/api/1.1/');
$response = $api->paymentRequestCreate(array(
        "purpose" => $data['name'],
        "amount" => $data['total'],
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => false,
        "send_sms" => false,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => BASE_URL."/product/thankyou",
        "webhook" => "https://requestb.in/1k2sai31"
        ));
    $pay_ulr = $response['longurl']; //Go to Payment page
    $this->response->redirect($pay_ulr);
}

public function thankyouAction(){
  echo '<pre>';

  $api = new Instamojo\Instamojo('test_77056bcad8638a5452046b92c94', 'test_186d5bda05b60deaf8687afedc0','https://test.instamojo.com/api/1.1/');

  $payid = $this->request->get('payment_request_id');

   $response = $api->paymentRequestStatus($payid);

   $this->view->response=$response;
   $this->view->baseurl=BASE_URL;
}

}

 ?>
