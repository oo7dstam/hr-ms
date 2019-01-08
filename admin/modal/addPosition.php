<div id="addPosition" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Position</h4>
            </div>
            <div id="approvedLeave_form" class="modal-body">
                <form role="form"> 
                    <input type="hidden" id="id" name="id" value="<?php echo $values['id'];?>">
                    <div class="form-group">
                        <label>Selects Category</label>
                        <select class="form-control" id="categories" name="categories">

                            <?php 
                                if(!empty($categoriesDetails)){
        //                                
                                    foreach($categoriesDetails as $values ){
                                        $status = "";                               

                                        echo "<option value='".$values['id']."'>".$values['name']."</option>";
                                    }
                                }else{
                                    echo "
                                        <tr>
                                            <td colspan='7'>No found result.</td>
                                        </tr>
                                    ";
                                }
                            ?>
                        </select>
                    </div>
					<div class="form-group">
                        <label>Salary Grade</label>
                        <select class="form-control" type="text" name="salary_grade_id" id="salary_grade_id">
							<?php 
								foreach($salaryGradeList as $key=>$value)
								{
									
									echo '<option value="'.$value['id'].'">'.$value['salary_grade'].'</option>';
								}
							?>
						</select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="position" id="position">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-save">Save</button>
            </div>
        </div>

    </div>
</div>


