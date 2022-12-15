<?php
$title = 'PGA Target Advisor';
require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/sidebar.php'; ?>

<div class="flex justify-between mb-5">
    <h1 class="text-3xl text-black text-white">
        <a href="<?php echo URLROOT; ?>/homepages/index/<?php echo $_SESSION['PerformanceDB']; ?>" class="no-underline hover:underline">Performance</a> > <b>PGA Target Advisor</b>
    </h1>
    <button onclick="window.location.reload()" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-500"> Refresh<i class="las la-redo-alt"></i></button>
</div>


<div class="overflow-x-auto relative shadow-md">

    <div style="height: auto; overflow: clip;">
        <div class="block  justify-center w-full shadow-md overflow-auto sm:rounded-lg" style="max-height: 75vh;">
            <?php

            $pgatarget = $data;

            if (!empty($pgatarget)) {

                //Separates Column title from result set
                foreach ($pgatarget as $outer_key => $array) {

                    foreach ($array as $inner_key => $value) {
                        $column_names[] = $inner_key;
                    }
                }
            ?>
                <table class="w-full text-sm text-center text-white dark:text-gray-400">
                    <thead class="text-md text-black bg-indigo-200 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                        <tr>
                            <?php for ($title = 0; $title <= count($array) - 1; $title++) { ?>
                                <th scope="col" class="py-2 px-6">
                                    <?php echo $column_names[$title]; ?>
                                </th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-500">
                        <?php
                        foreach ($pgatarget as $column_title => $value) {
                        ?>
                            <tr class="focus:hover:bg-gray-700 hover:bg-gray-700">
                                <?php
                                foreach ($value as $logfile) {
                                ?>
                                    <td class="py-4 px-6" title="<?php echo $logfile; ?>">
                                        <?php echo $logfile; ?>
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
                <div class="flex w-full shadow-md overflow-auto sm:rounded-lg bg-gray-500" style="max-height: 80%; min-height: 100%;">
                    <h1 class="text-white m-auto "><b>No PGA Target Data Found.</b></h1>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>