
<?php 
$cats=$data['cats'];
$brands=$data['brands'];
$oldproduct=$data['oldproduct'];
?>
<div class='cod-md-9'>
<h2> UPDATE PRODUCT</h2>
<div class="row btn-success">
<?php if(isset($_SESSION['msg'])) {echo $_SESSION['msg']; unset($_SESSION['msg']);}?>
</div>
<div class=row>
<form method="post" action="" enctype="multipart/form-data">

<table>

<tr>
<td class='col-md-3'><lable>Product Name</lable></td>
<td><input type="text" name="inputProductName" required value="<?php echo $oldproduct['productName'] ?>"></td>
</tr>

<tr>
<td class='col-md-3'><lable>Alias</lable></td>
<td><input type="text" name="inputAlias" value="<?php echo $oldproduct['alias'] ?>"></td>
</tr>

<tr>
<td class='col-md-3'><lable>Category Name</lable></td>
<td><select name="inputCatId">
<?php foreach ($cats as $cat){?>
<option value="<?php echo $cat['catId']?>" <?php if($oldproduct['catId']==$cat['catId']) echo "selected" ?> >
<?php echo $cat['catName']?>
</option>
<?php }?>
</select>
</td>
</tr>

<tr>
<td class='col-md-3'><lable>Brand Name</lable></td>
<td><select name="inputBrandId">
<?php foreach ($brands as $brand){?>
<option value="<?php echo $brand['brandId']?>"  <?php if($oldproduct['brandId']==$brand['brandId']) echo "selected" ?> >
<?php echo $brand['brandName']?>
</option>
<?php }?>
</select>
</td>
</tr>

<tr>
<td class='col-md-3'><lable>Chi tiết SP</lable></td>
<td><textarea name="inputDetail" required cols=50 rows=10> <?php if($oldproduct['detail']) echo $oldproduct['detail']?> </textarea></td>
</tr>

<tr>
<td class='col-md-3'><lable>Price</lable></td>
<td><input type="number" name="inputPrice" max=3000 min=1 step="0.01" value="<?php echo $oldproduct['price']?>"></td>
</tr>

<tr>
<td class='col-md-3'><lable>Sale Price</lable></td>
<td><input type="number" name="inputSalePrice" max=3000 min=1 step="0.01"  value="<?php echo $oldproduct['salePrice']?>"></td>
</tr>

<tr>
<td class='col-md-3'><lable>Image</lable></td>
<td><input type="file" name="inputFileUpLoad">Hình cũ: <?php echo $oldproduct['image']?></td>
</tr>

<tr>
<td class='col-md-3'><lable>Status</lable></td>
<td><select name="inputStatus">
<option value=0 <?php if($oldproduct['status']==0) echo "selected"?>>Ẩn</option>
<option value=1 <?php if($oldproduct['status']==1) echo "selected"?>>Hiện</option>
</select>
</td>
</tr>

<tr>
<td class='col-md-3'><lable>Trash</lable></td>
<td><select name="inputTrash">
<option value=0 <?php if($oldproduct['trash']==0) echo "selected"?>>Không</option>
<option value=1 <?php if($oldproduct['trash']==1) echo "selected"?>>Trash</option>
</select>
</td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</td>
</tr>

</table>
</form>
</div>
</div>