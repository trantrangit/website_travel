
 
$(document).ready(function(){

    
        grid();
    


 });

function grid()
{
   
    // init Masonry
    var $grid = $(' .tours-item').masonry({
      // options...
    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry(' .tours-item');
    })
}
