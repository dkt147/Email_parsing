<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

:root {
    --font1: 'Heebo', sans-serif;
    --font2: 'Fira Sans Extra Condensed', sans-serif;
    --font3: 'Roboto', sans-serif;

    --btnbg: #ffcc00;
    --btnfontcolor: rgb(61, 61, 61);
    --btnfontcolorhover: rgb(255, 255, 255);
    --btnbghover: #ffc116;
    --btnactivefs: rgb(241, 195, 46);


    --label-index: #960796;
    --danger-index: #34a530;
    /* PAGINATE */
    --link-color: #000;
    --link-color-hover: #fff;
    --bg-content-color: #41464b;

}

body {
    font-family: var(--font3);
    background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
}

a {
    text-decoration: none;
    color: #1a1a1a;
}


.bg-brand-btn {
    background: var(--label-index);
}



.btn-buynow {
    color: #000;   
    text-transform: uppercase;
    font-weight: 500;
    font-size: 1rem;
}





@media (min-width: 576px) {
    .btn-buynow {
        font-size: 1rem; 
    }
}


h2 {
    font-weight: 900;
}

.badge--slim {
    font-weight: 400;
}

.disclaimer {
    font-size: .8rem;

}

.cont-box {
    max-width: 1200px;
}



/* Centered text */
.label-top {
    position: absolute;
    background-color: var(--label-index);
    color: #fff;
    top: 8px;
    right: 8px;
    padding: 5px 10px 5px 10px;
    font-size: .7rem;
    font-weight: 600;
    border-radius: 3px;
    text-transform: uppercase;
}





.over-bg {
    background: rgba(53, 53, 53, 0.85);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(0.0px);
    -webkit-backdrop-filter: blur(0.0px);
    border-radius: 10px;
}

.bold-btn {

    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    padding: 5px 50px 5px 50px;
}

.box .btn {
    font-size: 1.5rem;
}

@media (max-width: 1025px) {
    .box .btn {
        padding: 5px 40px 5px 40px;
    }
}

@media (max-width: 250px) {
    .box .btn {
        padding: 5px 30px 5px 30px;
    }
}

/* START BUTTON */
.btn-warning {
    background: var(--btnbg);
    color: var(--btnfontcolor);
    fill: #ffffff;
    border: none;
    text-decoration: none;
    outline: 0;
    /* box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25); */
    /* border-radius: 100px; */
}

.btn-warning--main {
    background: transparent;
    padding: 5px 25px 5px 25px;
    border: solid 2px var(--btnbg);
    border-radius: 20px;
    width: 100%;
}

@media (min-width: 576px) {
    .btn-warning--main {
        width: 300px;
    }
}

.btn-warning:hover {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
    /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
}

.btn-check:focus+.btn-warning,
.btn-warning:focus {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
    /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
}

.btn-warning:active:focus {
    box-shadow: 0 0 0 0.25rem var(--btnactivefs);
}

.btn-warning:active {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
    /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
}

/* END BUTTON */

.bg-success {
    font-size: 1rem;
    background-color: var(--btnbg) !important;
    color: var(--btnfontcolor) !important;
}

.bg-danger {
    font-size: 1rem;
}


.price-hp {
    font-size: 1rem;
    font-weight: 600;
    color: darkgray;
}





.card {
    background: #fff;
     box-shadow: none;
    transition: none;
    border: 0;
    border-radius: 0;
    
 
}

.card-img,
.card-img-top {
   
}

.card h3 {
    overflow: hidden;
    height: 56px;
    font-weight: 300;
    font-size: 1rem;
}

.card h3 a {
  color:  #1a1a1a;
   
}

.card h3 a:hover {
    color:  #616161;
    
}

.card-img-top {
    width: 100%;
    min-height: 250px;
    max-height: 250px;
    object-fit: contain;
    padding: 30px;
}

.card h2 {
    font-size: 1rem;
}

.card-body {
  /* background: #ffc107; */
  background: #e9ecef;
}


.aff-link {
    /* text-decoration: overline; */
    font-weight: 500;
    color: #000!important;
}
    </style>
</head>
<body>
    
<div
        class="container-fluid cont-box bg-trasparent my-4 p-3"
        style="position: relative"
      >
        <div
          class="row row-top row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        
          <?php

            $query = "SELECT * FROM product";
            $result = mysqli_query($db,$query);

            while($row = mysqli_fetch_assoc($result)){
?>
<div class="col hp">
            <div class="card h-100 shadow-sm">
              <a  >
                <img
                  src="https://m.media-amazon.com/images/I/71mXq+QxJoL._AC_SL1500_.jpg"
                  class="card-img-top"
                  alt="title"
                />
              </g>
           
              <div class="label-top shadow-sm">
                <a class="text-white"  ><?php echo $row["name"];?></a>
              </div>
              <div class="card-body">
                <div class="clearfix mb-3">
                  <span
                    class="float-start badge rounded-pill bg-success">$<?php echo $row["price"];?></span>
                  
                  <span class="float-end"
                    ><a
                      :href="acer.affiliateLink"
                      class="small text-muted text-uppercase aff-link"
                      >REVIEWS</a
                    ></span
                  >
                </div>
                <h3 class="card-title">
                  <g-link  >2021 Apple MacBook Pro (14", Apple M1 Pro chip with 8-core CPU and 14-core GPU, 16GB RAM, 512GB SSD) - Sidereal Gray</g-link>
                </h3>

                <div class="d-grid gap-2 my-4">
                
                  <Button
                     
                    class="btn btn-warning bold-btn"
                    value="<?php echo $row["id"];?>">Add to cart</Button
                  >
              
                </div>
             
              </div>
            </div>
          </div>
<?php 
            }
?>

        
<!-- second row -->
            
      </div>

      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      <script>
        $('.btn-warning').click(function(){
                console.log("Function click");
$.ajax({
    url:'php_call.php',
    type:'post',
    dataType:'json',
    data:{'id':this.value},
    success:function(response){
        var data = response;
        alert(`${data["name"]} added to cart!`);
    }
});

        });
      </script>
</body>
</html>