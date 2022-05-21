 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Select Member</label>
                    <div class="col-sm-10">
                      <select onchange="member()" id="nutri_alot" class="form-control select2" name="alloted"  style="width: 100%;">
                        <?php 
                        $query="SELECT * FROM tbl_user WHERE is_delete=0";
                           $result= $con -> query($query);
                           $i=1;
                           
                            while($row = $result -> fetch_object()){

                              $name=$row ->first_name." ".$row->middle_name." ".$row->last_name;
                        ?>
                       
                    <option  value="<?php echo $row ->id; ?>"><?php echo $name; ?></option>
                    
                    <?php  
                      $i++;
                        }
                     ?>
                  </select>
                    </div>

                  </div>
                    <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                       
                 <H4  text-align: center;>OR </H4>
                    </div>

                  </div>
                  <div class="form-group row" >
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Select Group</label>
                    <div class="col-sm-10" >
                        <select onchange="group()" id="nutri_alot1" class="form-control select2" name="alloted"  style="width: 100%; ">
                    <?php 
                        $query="SELECT * FROM tbl_groups ";
                           $result= $con -> query($query);
                           $i=1;
                            while($row = $result -> fetch_object()){
                        ?>
                       
                    <option value="<?php echo $row ->id; ?>"><?php echo $row ->title;?></option>
                    
                    <?php  
                      $i++;
                        }
                      // echo $row -> id;
                     // exit();
                     ?>
                  </select>
                    </div>

                  </div>

                  Group: <?php echo fetch_extra_data('tbl_groups','title','id',$row->group) ;?>



<!-- <div class="form-group row" id="nutri_alot2" style="display:none">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Select Member</label>
                    <div class="col-sm-10">
                      <select id="member_edit_nutri" class="form-control select2" name="member"  style="width: 100%;">
                        <?php 
                        $query="SELECT * FROM tbl_user WHERE is_delete=0";
                           $result= $con -> query($query);
                           $i=1;
                           
                            while($row = $result -> fetch_object()){

                              $name=$row ->first_name." ".$row->middle_name." ".$row->last_name;
                        ?>
                       
                    <option  value="<?php echo $row ->id; ?>"><?php echo $name; ?></option>
                    
                    <?php  
                      $i++;
                        }
                     ?>
                  </select>
                    </div>

                  </div> -->
                  <!-- <div class="form-group row" id="nutri_alot3" style="display:none">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Select Group</label>
                    <div class="col-sm-10" >
                        <select id="group_edit_nutri" class="form-control select2" name="group"  style="width: 100%; ">
                    <?php 
                        $query="SELECT * FROM tbl_groups ";
                           $result= $con -> query($query);
                           $i=1;
                            while($row = $result -> fetch_object()){
                        ?>
                       
                    <option value="<?php echo $row ->id; ?>"><?php echo $row ->title;?></option>
                    
                    <?php  
                      $i++;
                        }
                      // echo $row -> id;
                     // exit();
                     ?>
                  </select>
                    </div>

                  </div> -->


                  <!-- <select class="form-control"  id="alloted">
                          <option value="">Select</option>
                            <option value="Member">Member</option>
                              <option value="Group">Group</option>     </select>  --> 

                               <!-- <div class="form-group row" id="nutri_alot" style="display:none">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Select Member</label>
                    <div class="col-sm-10">
                      <select id="nutri_alot" class="form-control select2" name="member"  style="width: 100%;">
                        <?php 
                        $query="SELECT * FROM tbl_user WHERE is_delete=0";
                           $result= $con -> query($query);
                           $i=1;
                           
                            while($row = $result -> fetch_object()){

                              $name=$row ->first_name." ".$row->middle_name." ".$row->last_name;
                        ?>
                       
                    <option  value="<?php echo $row ->id; ?>"><?php echo $name; ?></option>
                    
                    <?php  
                      $i++;
                        }
                     ?>
                  </select>
                    </div>

                  </div> -->
                  <!-- <div class="form-group row" id="nutri_alot1" style="display:none">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Select Group</label>
                    <div class="col-sm-10" >
                        <select id="nutri_alot1" class="form-control select2" name="group"  style="width: 100%; ">
                    <?php 
                        $query="SELECT * FROM tbl_groups ";
                           $result= $con -> query($query);
                           $i=1;
                            while($row = $result -> fetch_object()){
                        ?>
                       
                    <option value="<?php echo $row ->id; ?>"><?php echo $row ->title;?></option>
                    
                    <?php  
                      $i++;
                        }
                      // echo $row -> id;
                     // exit();
                     ?>
                  </select>
                    </div>

                  </div> -->


                  // ============add select=====================
//    $('#alloted').on('change', function() {
//   // alert( this.value );
//   if(this.value=="Member"){
// $('#nutri_alot').show();
//   }else{
//     $('#nutri_alot1').disable();
//   }
// });
//    $('#alloted').on('change', function() {
//   // alert( this.value );
//   if(this.value=="Group"){
// $('#nutri_alot1').show();
//   }else{
//     $('#nutri_alot').disable();
//   }
// });

// ============edit select=====================
//    $('#alloted').on('change', function() {
//   // alert( this.value );
//   if(this.value=="Member"){
// $('#member_edit_nutri').show();
//   }else{
//     $('#group_edit_nutri').disable();
//   }
// });
//    $('#alloted').on('change', function() {
//   // alert( this.value );
//   if(this.value=="Group"){
// $('#group_edit_nutri').show();
//   }else{
//     $('#member_edit_nutri').disable();
//   }
// });