<?php
function component($productname,$productdiscription,$productprice,$productimg,$productid){
    $element = "
          <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
          <div class=\"container\">
        
          
              <div class=\"card shadow\">
                  <div class=\"image\">
                      <img src=\"$productimg\" alt=\"Image1\">
                  </div>
                <div class=\"content\">
                <h2 class=\"fs-4 text-dark \">$productname </h2>
                <small><s class=\"text-danger\">300 </s></small>
                <span class=\"text-dark\">$productprice</span>
                <br>
                <button type=\"button\" id=\"pop-btn\" class=\"pop-btn\">View Now</button> 

                </div>
                       
                  </div>
                  
                    </div>
              </div>   

              <div class=\"popup-view\" id=\"popup-view\">
              <form action=\"shop.php\" method=\"post\">
              <div class=\"popup-card\">
              
                <a ><i class=\"fa fa-times close-btn\" id=\"close-btn\"></i></a>
                <div class=\"product-img\">
                <img src=\"$productimg\" alt=\"Image1\">
                </div>
                <div class=\"info\">
                  <h2>$productname</h2>
                  <br>
                  <p>$productdiscription</p>
                  <div class=\"content\">
                  <span>Price : </span> <small><s class=\"text-danger\">300 </s></small>
                 <span class=\"text-withe\">$productprice</span>
                  <br>
                  <button type=\"submit\" class=\"btn btn-success   my-5 px-5 bg-success\" name=\"add\">Add To Cart</button>
                   <input type='hidden' name='product_id' value='$productid'>
              
              </div>
              </div>
              
            </div>
            </form>
            </div>
";
    echo $element;
}






function cartElement($productimg, $productname, $productprice, $productid,$cartid){
    $element = "
    
    <form action=\"cart.php\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-5\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                            
                               
<button type=\"button\" class=\"btn btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" data-bs-whatever=\"@fat\">Confirm</button>

<div class=\"modal fade\" id=\"exampleModal\" tabindex='-1' aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">confirm order</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <form action=\"cart.php\" method=\"post\">
          <div class=\"mb-3\">
            <label for=\"recipient-name\" class=\"col-form-label\">Phone number:</label>
            <input type=\"number\" class=\"form-control\" id=\"recipient-name\" name=\"pnum\">
          </div>
          <div class=\"mb-3\">
            <label for=\"message-text\" class=\"col-form-label\">Address:</label>
            <input type=\"text\" class=\"form-control\" id=\"message-text\" name=\"address\"></input>
            <input type=\"hidden\" name=\"cart_id\" value='$cartid'>
            <input type=\"hidden\" name=\"product_id\" value='$productid'>

          </div>
           <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        <button type=\"submit\" class=\"btn btn-primary\" name=\"confirm\">Send order</button>
        </div>
        </form>
      </div>
     
      </div>
      
    </div>
  
</div>
                               
                               
                              
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                <input type=\"hidden\" name=\"p-id\" value=\"$productid\">
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                <span class=\"fw-bold fs-5	\">Quantity </span>
                                    <input type=\"number\" value=\"1\" class=\"form-control w-30 d-inline\">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

              
    ";
    echo  $element;
}
function shippingElement($shippingid,$address,$pnum,$cartid){
  $element = "
  <table class=\"table table-striped\">
  <tr>
  <td  class=\"\">
  $shippingid
  </td>
  
  <td class=\"pl-3\">
<span>  $address</span>
  </td>

  <td class=\"\">
 $pnum
  </td>
  <td class=\"\">
  $cartid
   </td>
   
  
  </tr>
  </table>
  
  ";
  echo $element;

}
function featureProduct($productimg , $productname, $productPostprice ,$productdiscription,$productid){
  $element="
  <div class=\"col-lg-4 col-md-6\">
     
<div class=\"product-card\">
    <div class=\"product-image\">
    <img src=\"$productimg\">
  </div>
  <div class=\"product-details\">
    <h1>$productname</h1>
    <p>$productdiscription</p>
    <small>
      <s>500$</s>
    </small>
    <span>  $productPostprice$</span>
    <br>
    
    <img src=\"assets/img/feature/sale.png\" class=\"sale\">
    <form action=\"component.php\" method=\"post\">
    <a href=\"shop.php\" type=\"button\" name=\"ggg\" class=\" pt-5 text-success \">Buy Now</a>
    </form>
  </div>
</div>
</div>";
  
  
  echo $element;
}
?>

