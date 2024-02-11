<!-- BDC FINALIZE PROMPT.modal -->
<div class="modal fade" id="FinalizeModalBack">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Finalize</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <p>
                Are you sure you want to
                    <?php
                    if ($_SESSION["userType"] == "bo") {
                        echo "approve this plan as the Annual Budget Plan?";
                    } else if ($_SESSION["userType"] == "bdc") {
                        echo "send this plan to the Barangay Committee?";
                    } else if ($_SESSION["userType"] == "bc") {
                        echo "send this plan to the Budget Office for approval?";
                    }
                    ?>
                </p>
                <form method="post" <?php echo "action=\"/includes1/finalize.php?year={$activeYear}&userType={$_SESSION['userType']}\"" ?>>
                    <div class="form-group">
                    </div>
                    <button type="submit" class="btn btn-primary">Yes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>