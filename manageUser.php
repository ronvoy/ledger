<?php
   include("connection.php");
   include("query.php");
   
   $obj = new Query();

   $description='';
   $expense='';
   $income='';
   $category='';
   $id='';

   if(isset($_GET['id']) && $_GET['id']!=''){
      $id= $_GET['id'];
      $condition_arr=array('id'=>$id);
      $result=$obj->getData('tb',$condition_arr);
      $description=$result['0'] ['description'];
      $expense=$result['0'] ['expense'];
      $income=$result['0'] ['income'];
      $category=$result['0'] ['category'];

   }

   if(isset($_POST["submit"]))
   {
      $description = $_POST['description'];
      $expense = $_POST['expense'];
      $income = $_POST['income'];
      $category = $_POST['category'];

      $condition_arr = array(
         'description' => $description,
         'expense' => $expense,
         'income' => $income,
         'category' => $category
      );
      if($id==''){


      $obj->insertData('tb', $condition_arr);
      }else{
         $obj->updateData('tb', $condition_arr,'id',$id);
      }


      header('Location: index.php');
        
         
      }
      
         
   
?>
<!doctype html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Manage User </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
	  <style>
		.container{margin-top:100px;}
	  </style>
   </head>
   <body>
      
      <div class="container">
         <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add new records</strong> <a href="index.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a></div>
            <div class="card-body">
               <div class="col-sm-6">
                  <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                  <form method="post">
                     <div class="form-group">
                        <label>description<span class="text-danger">*</span></label>
                        <input type="varchar" name="description" id="description" class="form-control" placeholder="Enter description" required value="<?php echo $description?>">
                     </div>
                     <div class="form-group">
                        <label>expense <span class="text-danger">*</span></label>
                        <input type="int" name="expense" id="expense" class="form-control" placeholder="expense" required value="<?php echo $expense?>">
                     </div>
                     <div class="form-group">
                        <label>income <span class="text-danger">*</span></label>
                        <input type="int" name="income" name="income" id="income" class="form-control"  placeholder="income" required value="<?php echo $income?>">
                     </div>
                     <div class="form-group">
                        <label>category<span class="text-danger">*</span></label>
                        <input type="varchar" name="category" id="category" class="form-control" placeholder="category" required value="<?php echo $category?>">
                     </div>
                     
                     <div class="form-group">
                        <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> submit </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
   </body>
</html>
