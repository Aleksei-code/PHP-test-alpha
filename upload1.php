<!doctype html>
<html lang="en">
<head>
    <?php require 'blocks/head.php'?>
    <title>Upload file to website</title>
</head>
<body>

<?php require_once 'public/check.php' ?>

<?php require_once 'blocks/header.php'; ?>

<form method="post" name="pic_form" onsubmit="FormSubmit(event)">
    <h3>Upload picture:</h3>
    <div class="form-submit">
        <div class="form-row">
            <label>Изображения:</label>
            <div class="img-list " id="js-file-list"></div>
            <input id="js-file"  type="file" name="file[]" multiple accept=".jpg,.jpeg,.png">
        </div>
        <input class="btn btn-primary" type="submit" name="send" value="Отправить">
    </div>
</form>

<?php  require_once 'public/getPicturesList.php'
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    function FormSubmit(event) {
        event.preventDefault();
        console.log(document.forms);
        let login = document.forms.pic_form;
        let formData = new FormData(login);

        console.log(login);

        fetch("public/save_files", {
                method: 'POST',
                body: formData
            }
        )
            .then((response) => response.json())
            .then((data)=>{
                if (data.success === true){
                    alert('Вы добавили файл')
                }
            })
    }


    $("#js-file").change(function(){
        if (window.FormData === undefined) {
            alert('В вашем браузере загрузка файлов не поддерживается');
        } else {
            let formData = new FormData();
            $.each($("#js-file")[0].files, function(key, input){
                formData.append('file[]', input);
            });

            $.ajax({
                type: 'POST',
                url: '/ajax/upload',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                dataType : 'json',
                success: function(msg){
                    msg.forEach(function(row) {
                        if (row.error == '') {
                            $('#js-file-list').append(row.data);
                        } else {
                            alert(row.error);
                            document.location.reload(true);
                        }
                    });
                    $("#js-file").val('');
                }
            });
        }
    });

    /* Удаление загруженной картинки */
    function remove_img(target){
        $(target).parent().remove();
    }
</script>

<?php require_once 'blocks/footer.php' ?>

</body>

<!--<script type="text/javascript" src="script/uploadScript.js"></script>-->

</html>