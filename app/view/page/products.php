<?php
include "test.php";
//$baseUrl = "http://localhost";
$baseUrl = "http://192.168.0.103";
?>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<style>
    .categories {
        height: 40em;
        overflow: auto;

    }

    .row {
        margin-bottom: 50px;
    }

    .select-dropdown {
        margin-top: 3rem;
    }

    .categories {
        height: 40rem;
    }

    .list-group-item {
        font-weight: bold;
        text-decoration: none;
    }

    .list-group-item a {
        width: 100%;
        height: 100%;
        display: block;
    }

    .list-group-item a:hover {
        background: rgba(0, 0, 0, .03);
    }




    ::-webkit-scrollbar {
        width: 1rem !important;
        height: 1rem !important;
    }

    ::-webkit-scrollbar-button {
        width: 0;
        height: 0;
    }

    ::-webkit-scrollbar-corner {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: #dddddd;
        border: 5px solid #dddddd;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }



    .search-box {
        width: 100%;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }

    .search-box input[type="text"] {
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }

    .result {
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }

    .search-box input[type="text"],
    .result {
        width: 100%;
        box-sizing: border-box;
    }

    /* Formatting result items */
    .result p {
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }

    .result p:hover {
        background: #f2f2f2;
    }

    .card-mobile {
        width: 100%;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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
            $("#myList li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        
    });

</script>
<script>   
$('.ui.dropdown').dropdown({ action: 'select' });
</script>
<!-- You MUST include jQuery before Fomantic -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
<script src="/semantic/dist/semantic.min.js"></script>
<div class="container">
    <div class="row ">
        <div class="col-lg-4 d-none d-lg-block filter">
            <div class="card">
                <div class="card-header">
                    <h1 class="font-weight-bold mb-3">Kategóriák</h1>
                    <input class="form-control" id="myInput" type="text" placeholder="Kategória keresése...">
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush overflow-auto categories" onchange="location = this.value;" id="myList">
                        <?php foreach ($categories->data as $category) : ?>
                            <?php echo '<li class="list-group-item"> <a href="' . $baseUrl . '/index.php?page=kategoria&nev=' . $category->CikkCsoportNev . '&pageno=1">' . $category->CikkCsoportNev . ' </a></li>'; ?>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-sm-12">
            <div class="row justify-content-center d-lg-none select-dropdown">
                <div class="card-mobile">
                    <h1 class="font-weight-bold mb-3">Kategóriák</h1>
                    <div class="search-box h-400">
                        <input type="text" autocomplete="on" placeholder="Kategória keresése..." />
                        <ul class="list-group list-group-flush h-500 categories result" onchange="location = this.value;"></ul>
                    </div>
                </div>

                <div class="ui fluid search selection dropdown">
                    <input type="hidden" name="country">
                    <i class="dropdown icon"></i>
                    <div class="default text">Select Country</div>
                    <div class="menu">
                        <div class="item" data-value="af"><i class="af flag"></i>Afghanistan</div>
                        <div class="item" data-value="ax"><i class="ax flag"></i>Aland Islands</div>
                        <div class="item" data-value="al"><i class="al flag"></i>Albania</div>
                        <div class="item" data-value="dz"><i class="dz flag"></i>Algeria</div>
                        <div class="item" data-value="as"><i class="as flag"></i>American Samoa</div>
                        <div class="item" data-value="ad"><i class="ad flag"></i>Andorra</div>
                        <div class="item" data-value="ao"><i class="ao flag"></i>Angola</div>
                        <div class="item" data-value="ai"><i class="ai flag"></i>Anguilla</div>
                    </div>
                </div>
                <!-- <select id="my-select" class="custom-select" onchange="location = this.value;">
                    <?php foreach ($categories->data as $category) : ?>
                        <?php echo '<option value="' . $baseUrl . '/index.php?page=kategoria&nev=' . $category->CikkCsoportNev . '&pageno=1">' . $category->CikkCsoportNev . '</option>'; ?>

                    <?php endforeach; ?>
                </select> -->



            </div>
            <div class="row">
                <?php echo $content["category"]; ?>
            </div>
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