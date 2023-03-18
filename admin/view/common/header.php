<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html lang="en">

<head>
    <title>Admin dự án mẫu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/sidebars.css">
    <link rel="stylesheet" href="./assets/css/signin.css">
    <link rel="stylesheet" href="./assets/css/styles.css">


    <?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'contactpage':

            break;
        case 'intropage':

            break;
        case 'updatecart':
        case 'viewcart':
        case 'shopcartpage':
            echo `<script src="./assets/css/shopcart-page.css">

																																											        </script>`;
            break;
        case 'detailproductpage':
            echo '

            ';
            break;
        case 'signuppage':

            break;
        case 'shoppage':
            echo '

            ';
            break;
        case 'signinpage':

            break;
        case 'forgotpass':

            break;
        case 'commentlist':
            echo '<link rel="stylesheet" href="./assets/css/comments.css">';
            break;
        default:
            echo '

                ';
    }
} else {
    echo '


    ';
}
?>
</head>

<body>
    <div class="header">