<form method="post" action="/total">
    @csrf
    <input type="date" name="checkDate">
    <button type="submit" name="btn">Submit</button>
</form>

<?php  if (isset($_POST['btn'])){
    echo $result;
}
    ?>


