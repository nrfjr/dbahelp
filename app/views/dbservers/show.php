<?php
$title = 'Database Servers';
require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/sidebar.php';

$current_tab = isset($_GET['tab']) ? $_GET['tab'] : 1;
?>

<div class="flex justify-between mb-5">
    <h1 class="text-3xl text-black text-white">
        <b>Server & Apps Lists</b>
    </h1>
    <button onclick="window.location.reload()" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-500"> Refresh<i class="ml-2 fas fa-redo"></i></button>
    </a>
</div>

<div class="overflow-x-auto relative shadow-md ">

    <div class=" border-b border-gray-200">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center bg-gray-500 rounded-t-lg" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button onclick="window.history.replaceState(null, null, '?tab=1')" class="inline-block p-4 rounded-t-lg border-b-2 " id="proddb-tab" data-tabs-target="#proddb" type="button" role="tab" aria-controls="proddb" aria-selected="<?php echo setSelectTabforHTML(1, $current_tab) ?>">Production DB</button>
            </li>
            <li class="mr-2" role="presentation">
                <button onclick="window.history.replaceState(null, null, '?tab=2')" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent" id="prodapps-tab" data-tabs-target="#prodapps" type="button" role="tab" aria-controls="prodapps" aria-selected="<?php echo setSelectTabforHTML(2, $current_tab) ?>">Production Apps</button>
            </li>
            <li class="mr-2" role="presentation">
                <button onclick="window.history.replaceState(null, null, '?tab=3')" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent" id="devdb-tab" data-tabs-target="#devdb" type="button" role="tab" aria-controls="devdb" aria-selected="<?php echo setSelectTabforHTML(3, $current_tab) ?>">Development DB</button>
            </li>
            <li class="mr-2" role="presentation">
                <button onclick="window.history.replaceState(null, null, '?tab=4')" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent" id="devapps-tab" data-tabs-target="#devapps" type="button" role="tab" aria-controls="devapps" aria-selected="<?php echo setSelectTabforHTML(3, $current_tab) ?>">Development Apps</button>
            </li>
        </ul>
    </div>

    <div id="myTabContent">
        <?php
        foreach ($data as $title => $array) {
        ?>
            <div class="hidden p-4 bg-gray-50 rounded-b-lg max-h-screen overflow-auto h-full " id="<?php echo $title; ?>" role="tabpanel" aria-labelledby="<?php echo $title; ?>-tab">
                <div style="overflow:clip;height: fit-content;" class="rounded-lg">
                    <div class="block justify-center w-full shadow-md overflow-auto rounded-lg" style="max-height: 68vh;">
                        <?php

                        if (!empty($array)) {

                            //Separates Column title from result set
                            foreach ($array as $outer_key => $inner_array) {

                                foreach ($inner_array as $inner_key => $value) {
                                    $column_names[] = $inner_key;
                                }
                            }
                        ?>
                            <table class=" sortable w-full text-sm text-center text-white">
                                <thead class="cursor-pointer text-md text-black bg-indigo-200 sticky top-0">
                                    <tr>
                                        <?php for ($title = 0; $title <= count($inner_array) - 1; $title++) { ?>
                                            <th scope="col" class="py-2 px-6">
                                                <?php
                                                echo $column_names[$title];
                                                ?>
                                            </th>
                                        <?php
                                        }
                                        $column_names = [];
                                        ?>
                                    </tr>
                                </thead>
                                <tbody class="bg-gray-500 overflow-y-auto">
                                    <?php
                                    foreach ($array as $column_title => $values) {
                                    ?>
                                        <tr class="transition delay-50 focus:hover:bg-gray-700 hover:bg-gray-700">
                                            <?php
                                            foreach ($values as $ratios) {
                                            ?>
                                                <td class=" item py-4  px-6">
                                                    <?php echo $ratios; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        <?php
                        } else {
                        ?>
                            <div class="flex w-full shadow-md overflow-auto rounded-lg bg-gray-500" style="max-height: 80%; min-height: 100%;">
                                <h1 class="text-white m-auto "><b>No <?php echo strtoupper($title[0]) . substr($title, 1); ?> Found.</b></h1>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>