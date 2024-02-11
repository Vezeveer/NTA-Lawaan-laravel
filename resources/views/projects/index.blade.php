<x-layout>

    <?php
    // $items = getCurrentPlan($conn, "year_" . $activeYear);
    // if ($items == '') {
    // } else {
    //     // get project names
    //     for ($i = 0; count($items) > $i; $i++) {
    //         array_push($projects, $items[$i]['project']);
    //     }
    
    //     $projects = array_values(array_unique($projects));
    //     //echo "<script>console.log('{$projects[0]}')</script>";
    //     // get trimmed project names for ID html placement
    //     for ($i = 0; count($projects) > $i; $i++) {
    //         array_push($projectsTrimedNames, str_replace(' ', '', $projects[$i]));
    //     }
    // }
    ?>


@php
    // $projects = array();
    // $projectsTrimedNames = array();
    // $activeYear;

    // if (isset($_SESSION["usersname"])) {
    //     $items;

    //     // After action, update for next page
    //     if(isset($_GET['lastpage'])){
    //         if ($_GET['lastpage'] == 'current'){
    //             $_SESSION["activeYear"] = "noActive";
    //             $_SESSION["status"] = "no_active";
    //             $activeYear = $_SESSION["activeYear"];
    //         }
    //     }
    //     if(isset($_GET['newplan'])){
    //         if($_GET['newplan'] == 'yes'){
    //             $_SESSION["activeYear"] = getActiveYear($conn);
    //             $activeYear = $_SESSION["activeYear"];
    //             $_SESSION["status"] = "bdc_initializing";
    //         }
    //     }
    //     if(isset($_GET['userType'])){
    //         if($_GET['userType'] == "bo"){
    //             $_SESSION["activeYear"] = getActiveYear($conn);
    //             $activeYear = $_SESSION["activeYear"];
    //             $_SESSION["status"] = "bo_approved";
    //         }
    //         if($_GET['userType'] == "bdc"){
    //             if(isset($_GET['isArchived'])){
    //                 $_SESSION["activeYear"] = getActiveYear($conn);
    //                 $activeYear = $_SESSION["activeYear"];
    //                 $_SESSION["status"] = "no_active";
    //             } else {
    //                 $_SESSION["activeYear"] = getActiveYear($conn);
    //                 $activeYear = $_SESSION["activeYear"];
    //                 $_SESSION["status"] = "bc_finalizing";
    //             }
    //         }
    //         if($_GET['userType'] == "bc"){
    //             $_SESSION["activeYear"] = getActiveYear($conn);
    //             $activeYear = $_SESSION["activeYear"];
    //             $_SESSION["status"] = "pending_bo_approval";
    //         }
    //     }

    //     $_SESSION["activeYear"] = getActiveYear($conn);
    //     $activeYear = $_SESSION["activeYear"];
        
    //     echo "<script>console.log('Active year: {$activeYear}')</script>";
    //     $inactiveYears = getInactiveYears($conn, $activeYear);

    //     if ($_SESSION["usersname"] == null) {
    //         header("location: index.php");
    //         exit();
    //     } else {
            
    //     }

        // // allow viewing of content
        // if ($_SESSION['userType'] == 'bdc' && $_SESSION['status'] == 'bdc_initializing') {
        //     $_SESSION['enableContent'] = true;
        // } else if ($_SESSION['userType'] == 'bc') {
        //     if($_SESSION['status'] != 'bdc_initializing'){
        //         $_SESSION['enableContent'] = true;
        //     }
        // } else if ($_SESSION['userType'] == 'bo' && $_SESSION['status'] == 'pending_bo_approval') {
        //     $_SESSION['enableContent'] = true;
        // } else if ($_SESSION['status'] == 'bo_approved') {
        //     $_SESSION['enableContent'] = true;
        // }

        // if ($_SESSION['userType'] == 'bdc'){
        //     $_SESSION['adminAccess'] = true;
        // }

        $pTitleEditable = false;
        $showGo2plan = false;
        $EnableAddProj = false;
        $EnableFinalzPlan = false;
        $EnableMobiCurrPlanBtn = false;
        
        // switch($_SESSION['status']){
        //     case 'bdc_initializing':
        //         switch($_SESSION['userType']){
        //             case 'bdc':
        //                 $pTitleEditable = true;
        //                 $showGo2plan = true;
        //                 $EnableAddProj = true;
        //                 $EnableFinalzPlan = true;
        //                 $EnableMobiCurrPlanBtn = true;
        //                 break;
        //             case 'bc':
        //                 break;
        //             case 'bo':
        //                 break;
        //             default:
        //         }
        //         break;
        //     case 'bc_finalizing':
        //         switch($_SESSION['userType']){
        //             case 'bdc':
        //                 $showGo2plan = true;
        //                 $EnableMobiCurrPlanBtn = true;
        //                 break;
        //             case 'bc':
        //                 $pTitleEditable = true;
        //                 $showGo2plan = true;
        //                 $EnableAddProj = true;
        //                 $EnableFinalzPlan = true;
        //                 $EnableMobiCurrPlanBtn = true;
        //                 break;
        //             case 'bo':
        //                 break;
        //             default:
        //         }
        //         break;
        //     case 'pending_bo_approval':
        //         switch($_SESSION['userType']){
        //             case 'bdc':
        //                 $showGo2plan = true;
        //                 $EnableMobiCurrPlanBtn = true;
        //                 break;
        //             case 'bc':
        //                 $showGo2plan = true;
        //                 $EnableMobiCurrPlanBtn = true;
        //                 break;
        //             case 'bo':
        //                 $showGo2plan = true;
        //                 $EnableFinalzPlan = true;
        //                 $EnableMobiCurrPlanBtn = true;
        //                 break;
        //             default:
        //         }
        //         break;
        //     default:
        // }

        // } else {
            
        // }
        
    @endphp

@auth
@include('partials._navigation')
@endauth

    <!-- MAIN -->
    {{-- <div class="col p-4 overflow-auto" id="main-content">
    @php
    if ($_SESSION["status"] == "bo_approved") {
        echo "<h1 class=\"display-5\">Annual Budget Plan {$activeYear}</h1><div class=\"panel panel-default\">";
    } else {
        echo "<h1 class=\"display-5\">Annual Investment Plan {$activeYear}</h1><div class=\"panel panel-default\">";
    }
    
    if ($_SESSION['enableContent'] or $_SESSION['userType'] == 'bdc') {
        for ($j = 0; count($projects) > $j; $j++) {
            if (isset($projects[$j])) {
                echo "
                <div class=\"card text-center\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-tabs card-header-tabs\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" href=\"#\">Table</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Graph</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link disabled\" href=\"#\">Bar</a>
                        </li>
                        </ul>
                    </div>
                    <div class=\"card-body\">";
                    // Table Title Starts
                    echo "<a href=\"#\" class=\"card-title btn ";
                    echo $pTitleEditable ? "" : "disabled";
                    echo "\" data-target=\"#{$projectsTrimedNames[$j]}UpdateProjectNameModal\" data-toggle=\"modal\" data-backdrop=\"static\" data-keyboard=\"false\"><h5 class=\"panel-heading\">";
                    echo "$projects[$j]</h5></a>";
                    // Table Title Ends
                    echo "
                    <div class=\"panel-body card-text\">
                        <div class=\"table-responsive\">
                            <table id=\"";
                echo $projectsTrimedNames[$j];
                echo "\"";
                echo " class=\"table table-bordered table-striped display nowrap\" width=\"100%\">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>AIP Reference Code</th>
                                        <th>Activity Description</th>
                                        <th>Implementing Office</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Expected Output</th>
                                        <th>Funding Services</th>
                                        <th>Personal Services</th>
                                        <th>Maintenance</th>
                                        <th>Capital Outlay</th>
                                        <th>Total</th>
                                        <th>Project</th>
                                    </tr>
                                </thead>
                                <tbody >";
                echo "
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th colspan=\"4\" style=\"text-align:right\">Total:></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    ";
                    echo "</div>
                </div>
                <br>";
            }
        }
        echo "<hr>";
        if ($_SESSION['userType'] == 'bo') {
            echo "<button id=\"btnSupDocs\" type=\"button\" class=\"btn btn-secondary\" data-target=\"#SupDocs\" data-toggle=\"modal\" data-backdrop=\"static\" data-keyboard=\"false\" ";
            echo " >Supporting Documents</button>";
        } else {
            echo "<button id=\"btnAddProject\" type=\"button\" class=\"btn btn-primary\" data-target=\"#AddNewProject\" data-toggle=\"modal\" data-backdrop=\"static\" data-keyboard=\"false\" ";
            echo $EnableAddProj ? "" : "disabled";
            echo " >Add Project</button>";
        }
        echo "<button id=\"btnFinalizePlan\" type=\"button\" class=\"btn btn-success\" data-target=\"#FinalizeModalBack\" data-toggle=\"modal\" data-backdrop=\"static\" data-keyboard=\"false\" ";
        echo $EnableFinalzPlan ? "" : "disabled";
        echo $_SESSION['userType'] == 'bo' ? ">Approve Plan" : ">Finalize Plan";
        echo "</button>";
    
        if ($_SESSION['userType'] == 'bdc') {
            echo "<button id=\"btnArchiveProject\" type=\"button\" class=\"btn btn-secondary\" data-target=\"#ArchiveProject\" data-toggle=\"modal\" data-backdrop=\"static\" data-keyboard=\"false\" ";
            echo $_SESSION['status'] == 'bo_approved' ? "" : "disabled";
            echo " >Archive</button>";
    
            echo "<button id=\"btnSupDocs\" type=\"button\" class=\"btn btn-secondary\" data-target=\"#SupDocs\" data-toggle=\"modal\" data-backdrop=\"static\" data-keyboard=\"false\" ";
            echo " >Supporting Documents</button>";
    
            echo "<button id=\"btnDeletePlan\" type=\"button\" class=\"btn btn-danger\" 
                data-target=\"#DeletePlan\" data-toggle=\"modal\" data-backdrop=\"static\" 
                data-keyboard=\"false\" ";
            echo $_SESSION['status'] == 'bc_finalizing' ? "disabled" : ($_SESSION['status'] == 'pending_bo_approval' ? "disabled" : ($_SESSION['status'] == 'bo_approved' ? "disabled" : ""));
            echo " >Delete Plan</button>";
        } else if($_SESSION['userType'] == 'bc'){
            echo "<button id=\"btnSupDocs\" type=\"button\" class=\"btn btn-secondary\" data-target=\"#SupDocs\" data-toggle=\"modal\" data-backdrop=\"static\" data-keyboard=\"false\" ";
            echo " >Supporting Documents</button>";
        }
    
        echo "
            <br>
            <br>
            <br>
            <br></div>";
    } else {
        header("location: dashboard.php");
    }
    @endphp
    
    <!-- DELETE PLAN PROMPT.modal -->
    <div class="modal fade" id="DeletePlan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">DELETE</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <form method="post" <?php echo "action=\"/includes1/delete_plan.php?year={$_SESSION['activeYear']}&lastpage=current\"" ?>>
                        <div class="form-group">
                            <p>Are you sure you want to delete this plan?</p>
                        </div>
                        <button type="submit" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="newProject()">Add</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
                </div> -->
            </div>
        </div>
    </div> --}}
    
    @auth
    {{$status}}
    @endauth
    <br>
    @auth
    User Logged In <br>
    {{auth()->user()->name}}
    <br>
    {{auth()->user()->userType}}
    <br>
    {{auth()->user()->email}}
    <br>
    {{auth()->user()->name}}
    <hr>
    <x-projects-card :projects="$projects" />

    <form action="/logout" method="post">
        @csrf
        <button type="submit">
            <i class="fa-solid fa-door-closed"></i> Logout
        </button>
    </form>

    @php
    $editable = "
    [1, 'aipRefCode',],
    [2, 'activityDesc'],
    [3, 'impOffice'],
    [4, 'startDate'],
    [5, 'endDate'],
    [6, 'expectedOutput'],
    [7, 'fundingServices'],
    [8, 'personalServices'],
    [9, 'maint'],
    [10, 'capitalOutlay'],
    [11, 'total']";

$modifiable = "editButton: false,
    deleteButton: false,
    saveButton: false,";
    
$toggleBtn;
$printMainContent = true;

$hideCont = "<script>$('#main-content table').hide();</script>"; // hide all content
$disableAddProjFinalizeBtns = "<script>
    $(document).ready(function () {
        $('#btnFinalizePlan').prop('disabled', true);
        $('#btnAddProject').prop('disabled', true);
    })
    </script>
    ";
$showUploadBtn = "disabled";

if(isset($_SESSION["usersname"])){
    switch ($_SESSION["userType"]) {
        case "bdc":
            if ($_SESSION["status"] == "bdc_initializing") {
                $toggleBtn = "enabled: true";
                $modifiable = "";
                $showUploadBtn = "";
            } else {
                $toggleBtn = "enabled: false";
                $editable = "";
                echo $disableAddProjFinalizeBtns;
            }
            break;
        case "bc":
            if ($_SESSION["status"] == "bc_finalizing") {
                $toggleBtn = "enabled: true";
                $modifiable = "";
                $showUploadBtn = "";
            } else {
                $toggleBtn = "enabled: false";
                $editable = "";
            }
            if ($_SESSION["status"] == "bdc_initializing") {
                $printMainContent = false;
                echo $hideCont;
            }
            break;
        case "bo":
            if ($_SESSION["status"] == "pending_bo_approval") {
                $toggleBtn = "enabled: false";
                $editable = "";
            } else {
                $toggleBtn = "enabled: false";
                $editable = "";
            }
            if ($_SESSION["status"] == "bdc_initializing") {
                $printMainContent = false;
                echo $hideCont;
            }
            if ($_SESSION["status"] == "bc_finalizing") {
                $printMainContent = false;
                echo $hideCont;
            }
            if ($_SESSION["status"] == "bo_approved") {
                //$printMainContent = false;
                //echo $hideCont;
                $toggleBtn = "enabled: false";
                $editable = "";
                echo $disableAddProjFinalizeBtns;
            }
            break;
        default:
    }



    function contentType($printMainContent, $projectsTrimedNames, $projects, $activeYear, $toggleBtn, $modifiable, $editable)
    {
        if ($printMainContent) {
            for ($i = 0; count($projectsTrimedNames) > $i; $i++) {
                echo "
                <script type=\"text/javascript\" language=\"javascript\">
                    $(document).ready(function() {

                        var dataTable = $('#{$projectsTrimedNames[$i]}').DataTable({
                            \"processing\": true,
                            \"serverSide\": true,
                            \"order\": [],
                            \"ajax\": {
                                url: \"includes1/fetch.php?projectName={$projects[$i]}&year={$activeYear}\",
                                type: \"POST\"
                            },
                            dom: 'Bfrtip',
                            buttons: [
                                {
                                    text: 'New Entry',
                                    action: function (e, node, config){
                                        $('#{$projectsTrimedNames[$i]}myModal').modal('show')
                                    },
                                    {$toggleBtn}
                                },
                                {
                                    text: 'Export',
                                    extend: 'collection',
                                    className: 'custom-html-collection',
                                    buttons: [
                                        'excel',
                                        'pdf',
                                        'csv',
                                        'print',
                                        'copy'
                                    ]
                                }
                            ],
                            scrollXinner: true,
                            \"autoWidth\"  : false,
                            footerCallback: function (row, data, start, end, display) {
                                var api = this.api();
                    
                                // Remove the formatting to get integer data for summation
                                var intVal = function (i) {
                                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                };
                    
                                // Total over all pages
                                total = api
                                    .column(11)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);
                    
                                // Total over this page
                                pageTotal = api
                                    .column(11, { page: 'current' })
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);
                    
                                // Update footer
                                $(api.column(11).footer()).html('₱' + pageTotal + ' ( ₱' + total + ' total)');
                            },
                        });

                        $('#{$projectsTrimedNames[$i]}').on('draw.dt', function() {
                            $('#{$projectsTrimedNames[$i]}').Tabledit({
                                url: 'includes1/action.php?year={$activeYear}',
                                dataType: 'json',
                                hideIdentifier: true,
                                {$modifiable}
                                columns: {
                                    identifier: [0, 'id'],
                                    editable: [ 
                                        {$editable}
                                    ]
                                },
                                restoreButton: false,
                                onSuccess: function(data, textStatus, jqXHR) {
                                    if (data.action == 'delete') {
                                        $('#' + data.id).remove();
                                        $('#{$projectsTrimedNames[$i]}').DataTable().ajax.reload();
                                    }
                                },
                                onDraw: function() {
                                    // Select all inputs of second column and apply datepicker each of them
                                    $('table tr td:nth-child(2) input').attr(\"maxlength\", \"50\");
                                    $('table tr td:nth-child(3) input').attr(\"maxlength\", \"50\");

                                    $('table tr td:nth-child(4) input').attr(\"maxlength\", \"50\");
                                    $('table tr td:nth-child(5) input').attr(\"type\", \"date\");
                                    $('table tr td:nth-child(6) input').attr(\"type\", \"date\");
                                    $('table tr td:nth-child(7) input').attr(\"maxlength\", \"50\");

                                    $('table tr td:nth-child(8) input').attr(\"maxlength\", \"10\");
                                    $('table tr td:nth-child(9) input').attr(\"maxlength\", \"10\");
                                    $('table tr td:nth-child(10) input').attr(\"maxlength\", \"10\");
                                    $('table tr td:nth-child(11) input').attr(\"maxlength\", \"10\");
                                    $('table tr td:nth-child(12) input').attr(\"maxlength\", \"10\");
                                    $('table tr td:nth-child(8) input').attr(\"type\", \"number\");
                                    $('table tr td:nth-child(9) input').attr(\"type\", \"number\");
                                    $('table tr td:nth-child(10) input').attr(\"type\", \"number\");
                                    $('table tr td:nth-child(11) input').attr(\"type\", \"number\");
                                    $('table tr td:nth-child(12) input').attr(\"type\", \"number\");
                                    $('table tr td:nth-child(8) input').attr(\"oninput\", \"this.value=this.value.slice(0,this.maxLength)\");
                                    $('table tr td:nth-child(9) input').attr(\"oninput\", \"this.value=this.value.slice(0,this.maxLength)\");
                                    $('table tr td:nth-child(10) input').attr(\"oninput\", \"this.value=this.value.slice(0,this.maxLength)\");
                                    $('table tr td:nth-child(11) input').attr(\"oninput\", \"this.value=this.value.slice(0,this.maxLength)\");
                                    $('table tr td:nth-child(12) input').attr(\"oninput\", \"this.value=this.value.slice(0,this.maxLength)\");

                                    // AipRefCode validation
                                    $('table tr td:nth-child(2) input').bind(\"input\", function () {
                                        var c = this.selectionStart,
                                        r = /[^0-9 -]|\s/gi,
                                        v = $(this).val();
                                        if (r.test(v)) {
                                        $(this).val(v.replace(r, \"\"));
                                        c--;
                                        }
                                        this.setSelectionRange(c, c);
                                    });
                                }
                            });
                        });
                        dataTable.columns.adjust();
                    });

                    $(document).on('submit', '#addEntry', function(e) {
                    e.preventDefault();
                    var city = $('#addCityField').val();
                    var username = $('#addUserField').val();
                    var mobile = $('#addMobileField').val();
                    var email = $('#addEmailField').val();
                    if (city != '' && username != '' && mobile != '' && email != '') {
                        $.ajax({
                        url: \"add_user.php\",
                        type: \"post\",
                        data: {
                            city: city,
                            username: username,
                            mobile: mobile,
                            email: email
                        },
                        success: function(data) {
                            var json = JSON.parse(data);
                            var status = json.status;
                            if (status == 'true') {
                                $('#{$projectsTrimedNames[$i]}').DataTable().ajax.reload();
                                $('#{$projectsTrimedNames[$i]}myModal').modal('hide');
                            } else {
                            alert('failed');
                            }
                        }
                        });
                    } else {
                        alert('Fill all the required fields');
                    }
                    });
                </script>
                ";

            }
        }
    } // end of contentType function

    if(isset($_GET['year'])){
        contentType($printMainContent, $projectsTrimedNames, $projects, $_GET['year'], "enabled: false", 
        "editButton: false,
        deleteButton: false,
        saveButton: false,", "");

    } else {
        contentType($printMainContent, $projectsTrimedNames, $projects, $activeYear, $toggleBtn, $modifiable, $editable);
    }
} // end of if statement checking if user is logged in.

    @endphp

    @else
    User not logged in
    @endauth
    
    </x-layout>