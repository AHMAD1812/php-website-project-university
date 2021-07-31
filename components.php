<?php
function nav_index()
{
    $data="
    <!-- ======= Mobile Menu ======= -->
    <div class=\"site-mobile-menu site-navbar-target\">
      <div class=\"site-mobile-menu-header\">
        <div class=\"site-mobile-menu-close mt-3\">
          <span class=\"icofont-close js-menu-toggle\"></span>
        </div>
      </div>
      <div class=\"site-mobile-menu-body\"></div>
    </div>
  
    <!-- ======= Header ======= -->
   
    <header class=\"site-navbar js-sticky-header site-navbar-target\" role=\"banner\">
  
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-6 col-lg-2\">
            <h1 class=\"mb-0 site-logo\" style=\"margin-top:30px;\"><a href=\"index.html\" class=\"mb-0\">Product Nest</a></h1>
          </div>
          
  
          <div class=\"col-12 col-md-10 d-none d-lg-block\">
          
            <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">
            
              <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                
                <li class=\"active\"><a href=\"index.php\" class=\"nav-link\">Home</a></li>
                <li><a href=\"mobile.php\" class=\"nav-link\">Mobile</a></li>
                <li><a href=\"laptop.php\" class=\"nav-link\">Laptops</a></li>
                <li><a href=\"contact.php\" class=\"nav-link\">Contact Us</a></li>
                  <li class=\"btnsign\"><a href=\"signup.php\" class=\"nav-link\">Sign up</a></li>
                  <li class=\"btnsign\"><a href=\"login.php\" class=\"nav-link\">Login</a></li>
                  <li> <a class=\"openBtn nav-link\" onclick=\"openSearch()\">
                  <i class=\"fa fa-search searchbtn\"></i>
                  </a>
                  </li>
                  
              </ul>
            </nav>
          </div>
              <div id=\"myOverlay\" class=\"overlay\">
              <span class=\"closebtn\" onclick=\"closeSearch()\" title=\"Close Overlay\">x</span>
              <div class=\"overlay-content\">
              <form action=\"search.php\" method=\"post\">
              <input type=\"text\" name=\"search_text\" placeholder=\"Search..\" name=\"search\">
              <button type=\"submit\" name=\"search_item\"><i class=\"fa fa-search\"></i></button>
              </form>
              </div>
              </div>
          <div class=\"col-6 d-inline-block d-lg-none ml-md-0 py-3\" style=\"position: relative; top: 3px;\">
         
            <a href=\"#\" class=\"burger site-menu-toggle js-menu-toggle\" data-toggle=\"collapse\" data-target=\"#main-navbar\">
              <span></span>
            </a>
          </div>
  
        </div>
      </div>
  
    </header>
    ";
    echo $data;
}


function nav_home($name)
{
  $imge=$_SESSION['img'];
    $data="
    <!-- ======= Mobile Menu ======= -->
    <div class=\"site-mobile-menu site-navbar-target\">
      <div class=\"site-mobile-menu-header\">
        <div class=\"site-mobile-menu-close mt-3\">
          <span class=\"icofont-close js-menu-toggle\"></span>
        </div>
      </div>
      <div class=\"site-mobile-menu-body\"></div>
    </div>
  
    <!-- ======= Header ======= -->
   
    <header class=\"site-navbar js-sticky-header site-navbar-target\" role=\"banner\">
  
      <div class=\"container\" >
        <div class=\"row\">
          <div class=\"col-6 col-lg-2\">
            <h1 class=\"mb-0 site-logo\" style=\"margin-top:30px;\"><a href=\"index.html\" class=\"mb-0\">Product Nest</a></h1>
          </div>
          
  
          <div class=\"col-12 col-md-10 d-none d-lg-block\">
          
            <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">
            
              <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                
                <li class=\"active\"><a href=\"home.php\" class=\"nav-link\">Home</a></li>
                <li><a href=\"mobile.php\" class=\"nav-link\">Mobile</a></li>
                <li><a href=\"laptop.php\" class=\"nav-link\">Laptops</a></li>
                <li><a href=\"contact.php\" class=\"nav-link\">Contact Us</a></li>
                  <li> <a class=\"openBtn nav-link\" onclick=\"openSearch()\">
                  <i class=\"fa fa-search searchbtn\"></i>
                  </a>
                  </li>
                  <li>
                      <ul class=\"navbar-nav\">
                      <li class=\"nav-item dropdown\">
                      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <img src=\"user_pic/$imge\" width=\"40\" height=\"40\" class=\"rounded-circle\">
                      </a>
                      <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                      <a class=\"dropdown-item\" href=\"#\">$name</a>
                      <a class=\"dropdown-item\" href=\"usersetting.php\">Edit Profile</a>
                      <a class=\"dropdown-item\" href=\"wishlist.php\">WishList&nbsp;<i class=\"fas fa-heart\"></i></a>
                      <a class=\"dropdown-item\" href=\"logout.php\">Log Out</a>
                      </div>
                      </li>   
                       </ul>
                  </li>    
              </ul>
            </nav>
          </div>
              <div id=\"myOverlay\" class=\"overlay\">
              <span class=\"closebtn\" onclick=\"closeSearch()\" title=\"Close Overlay\">x</span>
              <div class=\"overlay-content\">
                  <form action=\"search.php\" method=\"post\">
                  <input type=\"text\" name=\"search_text\" placeholder=\"Search..\" name=\"search\">
                  <button type=\"submit\" name=\"search_item\"><i class=\"fa fa-search\"></i></button>
                  </form>
              </div>
              </div>
          <div class=\"col-6 d-inline-block d-lg-none ml-md-0 py-3\" style=\"position: relative; top: 3px;\">
         
            <a href=\"#\" class=\"burger site-menu-toggle js-menu-toggle\" data-toggle=\"collapse\" data-target=\"#main-navbar\">
              <span></span>
            </a>
          </div>
  
        </div>
      </div>
      
  
    </header>
    ";
    echo $data;
}

function footer()
{
  $data="
  <footer class=\"footer\" role=\"contentinfo\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 mb-4 mb-md-0\">
        <h3>About Product Nest</h3>
        <p>Product Nest is a review giving website about Mobile and Laptops. Our mission is to make user know about all the specification of the product.</p>
        <p class=\"social\">
          <a href=\"#\"><span class=\"icofont-twitter\"></span></a>
          <a href=\"#\"><span class=\"icofont-facebook\"></span></a>
          <a href=\"#\"><span class=\"icofont-instagram\"></span></a>
          <a href=\"#\"><span class=\"icofont-linkedin\"></span></a>
        </p>
      </div>
      <div class=\"col-md-8 ml-auto\">
        <div class=\"row site-section pt-0\">
          <div class=\"col-md-3 mb-4 mb-md-0\">
            <h3>Navigation</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"#\">Home</a></li>
              <li><a href=\"#\">Contact Us</a></li>
              <li><a href=\"#\">Privacy Policiy</a></li>
              <li><a href=\"#\">Terms of Use</a></li>
            </ul>
          </div>
          <div class=\"col-md-3 mb-4 mb-md-0\">
            <h3>Products</h3>
            <ul class=\"list-unstyled\">
              <li><a href=\"#\">Mobiles</a></li>
              <li><a href=\"#\">Laptops</a></li>
            </ul>
          </div>
          <div class=\"col-md-6 mb-6 mb-md-0 footer-newsletter\">
          <h4>Join Our Newsletter</h4>
          <p>You can subscribe our Newsletter for remainder of new Products review.</p>
          <form action=\"addnews.php\" method=\"post\" style=\"\">
            <input type=\"email\" name=\"email\" style=\"\">
            <input type=\"submit\" value=\"Subscribe\" name=\"news\" 
            style=\" s \">
          </form>
        </div>
        </div>
      </div>
    </div>

  </div>
</footer>
  ";
  echo $data;
}

function mobile_show($id,$name,$filter,$img)
{
  $data="
          <div class=\"col-lg-4 col-md-6 portfolio-item $filter\">
            <div class=\"portfolio-wrap\">
            <a href=\"product_detail.php?ID=$id\">
              <img src=\"$img\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>$name</h4>
                <div class=\"portfolio-links\">
                  <a href=\"addwish.php?ID=$id&Name=$name&ty=mobile\" title=\"App 1\"><i class=\"fas fa-heart\"></i></a>
                  <a href=\"product_detail.php?ID=$id\" title=\"More Details\"><i class=\"fas fa-store\"></i></a>
                  <a href=\"$img\" class=\"venobox\" title=\"More Details\"><i class=\"fas fa-search-plus\"></i></a>
                </div>
              </div>
              </a>
            </div>
          </div>
          
  ";
  echo $data;
}  


function laptop_show($id,$name,$filter,$img)
{
  $data="
          <div class=\"col-lg-4 col-md-6 portfolio-item $filter\">
            <div class=\"portfolio-wrap\">
            <a href=\"laptop_detail.php?ID=$id\">
              <img src=\"$img\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>$name</h4>
                <div class=\"portfolio-links\">
                  <a href=\"addwish.php?ID=$id&Name=$name&ty=laptop\" title=\"App 1\"><i class=\"fas fa-heart\"></i></a>
                  <a href=\"laptop_detail.php?ID=$id\" title=\"More Details\"><i class=\"fas fa-store\"></i></a>
                  <a href=\"$img\" class=\"venobox\" title=\"More Details\"><i class=\"fas fa-search-plus\"></i></a>
                </div>
              </div>
              </a>
            </div>
          </div>
  ";
  echo $data;
}

function wish($u_id,$name,$os,$spec,$price,$img){
  $data="
  <div class=\"row border-top border-bottom\">
                <div class=\"row main align-items-center\">
                    <div class=\"col-2\"><img class=\"img-fluid\" src=\"$img\"></div>
                    <div class=\"col\">
                        <div class=\"row text-muted\">$name</div>
                        <div class=\"row\">$os</div>
                    </div>
                    <div class=\"col\"> $spec </div>
                    <div class=\"col\">$price <a href=\"deletewish.php?ID=$u_id&Name=$name\"> <span class=\"close\">&#10005;</span></a></div>
                </div>
            </div>
  ";
  echo $data;
}


function review_show($name,$review,$value,$title)
{
  $star=5-$value;
  echo "<div class=\"review text-center\">";
  echo "<p class=\"stars\">";
  // $s="<span class=\"icofont-star\"></span>";
  for($i=1;$i<=$value;$i++)
  {
    $s= "<span class=\"icofont-star\"></span>";
    echo $s;
  }
  for($i=1;$i<=$star;$i++)
  {
    $s= "<span class=\"icofont-star muted\"></span>";
    echo $s;
  }

  echo "</p>";
  $data="
 
               
               
                <h3>$title</h3>
                <blockquote>
                  <p>$review</p>
                </blockquote>

                <p class=\"review-user\">
                  <img src=\"assets/img/person.png\" alt=\"Image\" class=\"img-fluid rounded-circle mb-3\">
                  <span class=\"d-block\">
                    <span class=\"text-black\">$name</span>, &mdash; Website User
                  </span>
                </p>

  </div>           

  ";
  echo $data;

}

?>
