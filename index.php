<!doctype html>
<html lang="en">
<head>
    <?php require_once 'blocks/head.php';?>
    <title>Main page</title>
</head>
<?php require_once 'blocks/header.php'; ?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Pricing</h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
</div>

    <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>30 users included</li>
                            <li>15 GB of storage</li>
                            <li>Phone and email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="display-6 text-center mb-4">Compare plans</h2>

        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th style="width: 34%;"></th>
                    <th style="width: 22%;">Free</th>
                    <th style="width: 22%;">Pro</th>
                    <th style="width: 22%;">Enterprise</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="text-start">Public</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Private</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                    <th scope="row" class="text-start">Permissions</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Sharing</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Unlimited members</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Extra security</th>
                    <td></td>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>>

<?php require_once 'blocks/footer.php' ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>-->
<!--<script src="../../assets/js/vendor/popper.min.js"></script>-->
<!--<script src="../../dist/js/bootstrap.min.js"></script>-->
<!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>


</body>
</head>
<body>

</body>
</html>