<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
    <div class='container'>
        <div class='row'>
            <div class='cols-12'>
                <form required action="phone.php" method='POST'>
                    <select name="name" class='songoh' aria-label="Default select example">
                        <option selected>Нэр сонгох</option>
                        <option value="1">Билгүүн</option>
                        <option value="2">Ээж</option>
                        <option value="3">Гэр</option>
                    </select>
                    <button class='submit'>Submit</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <h1>
        <?php include 'form.php';?>
    </h1>
    <hr>
    <a href="index.html">Back home</a>
<?php include 'includes/footer.php';?>