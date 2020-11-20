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
<!-- <script src="//code.jquery.com/jquery-1.12.4.min.js"></script> -->



<?php foreach ($category["results"] as $product) : ?>

    <div class="ui items">
        <div class="item">
            <div class="image">
                <img src="/img/<?php echo $product->Cikkszam; ?>.jpg" onerror="this.src = '/img/no-image.jpg'">
            </div>
            <div class="content">
                <h6 class="header"><?php echo $product->Cikknev; ?></h6>
                <div class="meta">
                    <span><?php echo $product->Marka; ?></span>
                </div>
                <div class="description">
                    <p class="more"><?php echo $product->CikkLeiras;
                                    strlen($product->CikkLeiras); ?></p>
                </div>
                <div class="extra cikkszam">
                    <?php echo $product->Cikkszam; ?>
                </div>
            </div>
        </div>
        <hr class="my-4">
    </div>

<?php endforeach; ?>