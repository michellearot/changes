<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">

<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Resident Information</h4>
        </div>
        <div class="modal-body">';

        $edit_query = mysqli_query($con,"SELECT * from tblresident where id = '".$row['id']."' ");
        $erow = mysqli_fetch_array($edit_query);

        echo '
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">

                        <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                            <div class="col-sm-4">
                                <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.$erow['lname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.$erow['fname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.$erow['mname'].'"/>
                            </div> <br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" style="margin-top:10px;">Birthdate:</label>
                            <input name="txt_edit_bdate" class="form-control input-sm" type="date" value="'.$erow['bdate'].'"/> 
                        </div>

                        <div class="form-group">
                            <label class="control-label">Differently-abled Person:</label>
                            <input name="txt_edit_dperson" class="form-control input-sm input-size" type="text" value="'.$erow['differentlyabledperson'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Blood Type:</label>
                            <input name="txt_edit_btype" class="form-control input-sm input-size" type="text" value="'.$erow['bloodtype'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Civil Status:</label>
                            <input name="txt_edit_cstatus" class="form-control input-sm input-size" type="text" value="'.$erow['civilstatus'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Length of Stay: (in Months)</label>
                            <input name="txt_edit_length" class="form-control input-sm" type="number" min="1" value="'.$erow['lengthofstay'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nationality:</label>
                            <input name="txt_edit_national" class="form-control input-sm" type="text" value="'.$erow['nationality'].'"/>
                        </div>



                        <div class="form-group">
                            <label class="control-label">Educational Attainment:</label>
                            <select name="ddl_edit_eattain" class="form-control input-sm">
                                <option selected>'.$erow['highestEducationalAttainment'].'</option>
                                <option>No Schooling Completed</option>
                                <option>Elementary</option>
                                <option>High School Undergrad</option>
                                <option>High School Graduate</option>
                                <option>College Undergrad</option>
                                <option>Vocational</option>
                                <option>Bachelor’s Degree</option>
                                <option>Master’s Degree</option>
                                <option>Doctorate Degree</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Land Ownership Status:</label>
                            <select name="ddl_edit_los" class="form-control input-sm">
                                <option value="'.$erow['landOwnershipStatus'].'">'.$erow['landOwnershipStatus'].'</option>
                                <option>Owned</option>
                                <option>Landless</option>
                                <option>Tenant</option>
                                <option>Care Taker</option>
                            </select>
                        </div>
                        
                    </div>


                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Gender:</label>
                            <select name="ddl_edit_gender" class="form-control input-sm">
                                <option value="'.$erow['gender'].'" selected="">'.$erow['gender'].'</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Birthplace:</label>
                            <input name="txt_edit_bplace" class="form-control input-sm" type="text" value="'.$erow['bplace'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Marital Status:</label>
                            <input name="txt_edit_mstatus" class="form-control input-sm" type="text" value="'.$erow['maritalstatus'].'"/>
                        </div> 

                        <div class="form-group">
                            <label class="control-label">Zone No:</label>
                            <input name="txt_edit_zone" class="form-control input-sm" type="text" value="'.$erow['zone'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Occupation:</label>
                            <input name="txt_edit_occp" class="form-control input-sm" type="text" value="'.$erow['occupation'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Monthly Income:</label>
                            <input name="txt_edit_income" class="form-control input-sm" type="number" min="1" value="'.$erow['monthlyincome'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Religion:</label>
                            <input name="txt_edit_religion" class="form-control input-sm" type="text" value="'.$erow['religion'].'"/>
                        </div>


                        <div class="form-group">
                            <label class="control-label">House Ownership Status:</label>
                            <select name="ddl_edit_hos" class="form-control input-sm">
                                <option value="'.$erow['houseOwnershipStatus'].'" selected>'.$erow['houseOwnershipStatus'].'</option>
                                <option value="Own Home">Own Home</option>
                                <option value="Rent">Rent</option>
                                <option value="Live with Parents/Relatives">Live with Parents/Relatives</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Former Address:</label>
                            <input name="txt_edit_faddress" class="form-control input-sm" type="text" value="'.$erow['formerAddress'].'"/>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Image:</label>
                            <input name="txt_edit_image" class="form-control input-sm" type="file" />
                        </div>

                    </div>

                    </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>