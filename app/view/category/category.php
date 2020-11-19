<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .col {
        display: flex;
        margin-bottom: 15px;
        margin-top: 20px;
    }

    .card-img {
        width: 150px;
        align-self: center;
    }

    .cikkszam {
        text-decoration: underline;
        font-weight: bold;
    }

    a {
        color: #007bff;
    }

    a:visited {
        color: #007bff;
    }

    a.morelink {
        text-decoration: none;
        outline: none;
    }

    .morecontent span {
        display: none;
    }

</style>
<script>
    $(document).ready(function() {
        var showChar = 100;

        var moretext = "Több..."
        var lesstext = "Kevesebb";
        $('.more').each(function() {
            var content = $(this).html();
            console.log(content);
            if (content.length > showChar) {

                var c = content.substr(0, showChar);
                var h = content.substr(showChar - 1, content.length - showChar);

                var html = c + '<span class="moreellipses"> &nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                $(this).html(html);
            }

        });

        $(".morelink").click(function() {
            if ($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });



</script>
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- <?php foreach ($category["results"] as $product) : ?>
    <div class="col-lg-4 py-2">
        <div class="card h-100">
            <img class="card-img rounded mx-auto d-block" src="/img/<?php echo $product->Cikkszam; ?>.jpg" alt="<?php echo $product->Cikknev; ?>" title="<?php echo $product->Cikknev; ?>">
            <div class="card-body">
                <h4 class="card-title"> <?php echo $product->Cikknev; ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->Marka; ?></h6>
                <p class="card-text more">
                    <?php echo $product->CikkLeiras; ?>

                    <h6 class="mt-4 cikkszam">Cikkszám: <?php echo $product->Cikkszam; ?></h6>
            </div>
        </div>
    </div>
<?php endforeach; ?> -->






<?php foreach ($category["results"] as $product) : ?>
    <section class=" py-2">

            <div class="row flex-column flex-lg-row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <img class="card-img rounded mx-auto d-block" src="/img/<?php echo $product->Cikkszam; ?>.jpg" alt="" onerror="this.src = '/img/no-image.jpg';" title="<?php echo $product->Cikknev; ?>">
                </div>
                <div class="col-lg-9">
                    <h5 class="mt-3 mb-4"><?php echo $product->Cikknev; ?></h5>
                    <?php echo $product->Marka; ?><br>
                    <span class="mt-4 cikkszam">Cikkszám: <?php echo $product->Cikkszam; ?></span>
                    <p class="mt-3 mb-4 more"><?php echo $product->CikkLeiras;   strlen($product->CikkLeiras); ?></p>
                   
                   
                </div>
            </div>
            <hr class="my-4">
    </section>
<?php endforeach; ?>