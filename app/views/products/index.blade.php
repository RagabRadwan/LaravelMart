
<div class="row">
<div class='desktop-2'>
    <ul class="link-list">
            <li><a title="KineticWing IDE" href="http://kineticwing.com">KineticWing IDE</a></li>
            <li><a title="MVC Logic" href="http://mvclogic.com" class="active">MVC Logic</a></li>
            <li><a title="Jals" href="http://www.jals.in/">Jals</a></li>
            <li><a title="Rudra Icons" href="http://speedovation.com/">Rudra Icons</a></li>
          </ul>

</div>
<div class='desktop-10'>
    
    <?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$count = 0;



foreach ($products as $product) {

    if ($count == 0)
        //echo '<div class="row">';
    $count++;
    ?>

    <div class='item-box'>

        <table class="table">
            <tr>
                <td class='text-center'>                 
                    {{ link_to_action('ProductsController@getProduct', $product->name , [$product->id]); }}
                
                </td>
            </tr>
            <tr>
                <td class='text-center'><img data-src='holder.js/260x200' src='{{$product->image}}' /></td>
            </tr>
            
            <tr>
                <td>{{$product->short_desc}}</td>
            </tr>
           
<!--            <tr>
                <td>Category : { {$product->category->name}} Stock: { {$product->stock}}</td>
            </tr>-->
             <tr>
                 <td><button class="button float-left ">More Info</button> <button class="button primary float-right ">{{round($product->price,3)}} Add to cart</button></td>
            </tr>
        </table>






    </div>

    <?php
    //$product->category_id;
    if ($count == 2) {
        $count = 0;
        //echo '</div>';
    }
} 
?>
<div class='row'>
    
     {{$products->links()}} 
    
</div>
    
    
</div>

</div>

<!--<div id='wrap'>
    <div id='content'></div>
</div>-->

<script type="text/javascript">
    
//    $(document).ready(function () {
//		
//          var count = 2;  
//          $(window).scroll(function(){  
//                  if  ($(window).scrollTop() == $(document).height() - $(window).height()){  
//                     loadArticle(count);  
//                     count++;  
//                  }  
//          });   
//  
//  
//  // http://192.168.1.131:8989/admin/post/1
// //  HTML::link(URL::action('PostController@show', array($post->id) ), 'Show post'); }} 
// 
//          var url = { { URL::action('ProductController@indexAction')  }};  
//    
//          function loadArticle(pageNumber){      
//                  $('a#inifiniteLoader').show('fast');  
//                  $.ajax({  
//                      url: url,  
//                      type:'POST',  
//                      data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=loop',   
//                      success: function(html){  
//                          $('a#inifiniteLoader').hide('1000');  
//                          $("#content").append(html);    // This will be the div where our content will be loaded  
//                      }  
//                  });  
//              return false;  
//          }  
    
     
		
//	});
    
</script>