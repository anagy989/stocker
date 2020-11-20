<?php
include "test.php";
$baseUrl = "http://localhost:8080";
//$baseUrl = "http://192.168.0.103";
?>
<!-- <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->


<script type="text/javascript">
    $(document).ready(function() {
        $('.search-box input[type="text"]').on("keyup input", function() {
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");

            if (inputVal.length) {
                $.get("backend-search.php", {
                    term: inputVal
                }).done(function(data) {
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        // Set search input value on click of result item
        $(document).on("click", ".result p", function() {
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myList a").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

    });
</script>

<div class="container">
    <div class="row ">
        <div class="col-lg-4 d-none d-lg-block filter">
            <div class="card">
                <div class="card-header">
                    <h1 class="font-weight-bold mb-3">Kategóriák</h1>
                    <!-- <input class="form-control" id="myInput" type="text" placeholder="Kategória keresése..."> -->
                    <div class="ui search">
                        <div class="ui icon input w-100">
                            <input class="prompt" id="myInput" type="text" placeholder="Kategória keresése...">
                            <i class="search icon"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush overflow-auto categories" onchange="location = this.value;" id="myList">
                        <?php foreach ($categories->data as $category) : ?>
                            <?php echo '<a class="list-group-item" href="' . $baseUrl . '/index.php?page=kategoria&nev=' . $category->CikkCsoportNev . '&pageno=1">' . $category->CikkCsoportNev . ' </a>'; ?>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-sm-12">
            <div class="row justify-content-center d-lg-none select-dropdown">
                <h1 class="font-weight-bold mb-3">Kategóriák</h1>
                <div class="ui fluid search selection dropdown">
                    <input type="hidden" name="country">
                    <i class="dropdown icon"></i>
                    <div class="default text">Válassz...</div>
                    <div class="menu">
                        <?php foreach ($categories->data as $category) : ?>
                            <?php echo '<a class="item" href="' . $baseUrl . '/index.php?page=kategoria&nev=' . $category->CikkCsoportNev . '&pageno=1">' . $category->CikkCsoportNev . '</a>'; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <?php echo $content["category"]; ?>


            <div class="row justify-content-center">
                <div class="p-2" aria-label="Pagination">
                    <ul class="pagination mb-0 flex-wrap">
                        <?php echo $content["pagination"]; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>