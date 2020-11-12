<form method="Post" action="/process">
   <?php echo csrf_field()?>
    Name: <input type="text" name="name">
    
    <input type="submit" name="submit" value="send">
</form>