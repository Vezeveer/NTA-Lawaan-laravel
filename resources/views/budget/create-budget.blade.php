<!-- CREATE NEW BUDGET PLAN PROMPT.modal -->
<div class="modal fade" id="NewPlan">
    <?php
    $currentYr = date("Y");
    $years = array();
    for ($i = 0; $i < 5; $i++) {
        array_push($years, ++$currentYr);
    }
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Annual Investment Plan</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form method="post" <?php echo "action=\"/includes1/create_table.php\"" ?>>
                    <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">For Year:</label>
                            <select name="year" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <?php
                                $currentYr = date("Y");
                                echo "<option selected value=\"{$currentYr}\">{$currentYr}</option>";
                                for ($i = 0; $i < 5; $i++) {
                                    $currentYr++;
                                    echo "
                                    <option value=\"{$currentYr}\">{$currentYr}</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="newProject()">Add</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
        </div> -->
        </div>
    </div>
</div>