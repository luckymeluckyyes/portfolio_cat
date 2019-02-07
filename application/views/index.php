<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Create A Simple Responsive Portfolio Page with Filtering and Hover Effect</title>
	<meta name="description" content="In this tutorial, I'm going to show you how to create portfolio page with filtering and also hover effect for each of your project. We will be using a CSS3 and jQuery filter & sort plugin called MixItUp.">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
	
.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

</style>

</head>
<!------ Include the above in your HEAD tag ---------->

 <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Gallery</h1>
        </div>

        <div align="center">
        	<button class="btn btn-default filter-button" data-filter="all">All</button>
       <?php foreach ($users as $key => $user) { ?>

            
            <button class="btn btn-default filter-button" data-filter="<?php echo $user['category']; ?>"><?php echo $user['category']; ?></button>
           <?php } ?>
        </div>
        <br/>
<?php 
	//$y = $this->db->query('SELECT * FROM test');
	//$c = $y->result_array();
 ?> 
  <?php foreach ($users1 as $key => $user) { ?>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter <?php echo $user['cat']; ?>"><?php echo $user['cat']; ?>
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
  <?php } ?>
           
        </div>
    </div>
</section>


<script type="text/javascript">
	$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>
 <script type="text/javascript" src="http://www.designbootstrap.com/livedemos/2015/02/04/pink/assets/js/jquery.isotope.js"></script>

</body>
</html>