
  <div class="content-wrapper">
    <section class="content-header">
   
    </section>

    <section class="content">
      <div class="card card-outline card-primary rounded-0 shadow">
          <div class="card-header">
              <h3 class="card-title">List of students</h3>
              <div class="card-tools">
                  <a href="<?php echo base_url('student/add_student')?>" class="btn btn-flat btn-sm btn-primary"><span class="fas fa-plus"></span> Add New Student</a>
              </div>
          </div>
          <div class="card-body">
              <div class="container-fluid">
                  <table id="example1" class="table table-bordered table-hover table-striped">
                      <colgroup>
                          <col width="20%">
                          <col width="20%">
                          <col width="25%">
                          <col width="15%">
                      </colgroup>
                      <thead>
                          <tr class="bg-gradient-dark text-light">
                              <th>LRN</th>
                              <th>Name</th>
                              <th>Grade Level</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($students as $student): ?>
                          <tr>
                               <td class=""><p class="m-0 truncate-1"><?php echo $student->LRN ?> </p></td>
                              <td class=""><p class="m-0 truncate-1"><?php echo $student->last_name . ', ' . $student->first_name . ' ' . $student->middle_name . '.' ?></p></td>
                              <td class=""><p><?php echo $student->grd_title ?></p></td>
                             
                             <td align="center">
                                <a href="<?php echo base_url('student/student_profile/'.$student->std_id) ?>" class="btn btn-flat btn-default btn-sm border"><i class="fa fa-eye"></i> View</a>
                            </td>
                          </tr>
                          <?php endforeach ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </section>
  </div>
 


  
  <?php include APPPATH."views/templates/footer.php"; ?>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- <script type="text/javascript">
 function editOffice(obj,id){
    var row=obj.closest('tr');
    var rownum=parseInt(row.rowIndex);
    var city=row.cells[1].innerHTML;
    var phone=row.cells[2].innerHTML;
    var state=row.cells[3].innerHTML;
    var country=row.cells[4].innerHTML;
    var postalcode=row.cells[5].innerHTML;
    var territory=row.cells[6].innerHTML;
    var addressLine1=row.cells[7].innerHTML;
    var addressLine2=row.cells[8].innerHTML;
    // alert(city);
    $("#modalEdit").modal('show');
    $("#modalEdit #city").val(city);
    $("#modalEdit #phone").val(phone);
    $("#modalEdit #state").val(state);
    $("#modalEdit #country").val(country);
    $("#modalEdit #postalcode").val(postalcode);
    $("#modalEdit #territory").val(territory);
    $("#modalEdit #addressLine1").val(addressLine1);
    $("#modalEdit #addressLine2").val(addressLine2);

    $('#saveOffice').attr('onclick','updateOffice('+id+','+rownum+')');

  }


  function updateOffice(id,rownum){
    var city = $("#modalEdit #city").val();
    var phone = $("#modalEdit #phone").val();
    var state = $("#modalEdit #state").val();
    var country = $("#modalEdit #country").val();
    var postalcode = $("#modalEdit #postalcode").val();
    var territory = $("#modalEdit #territory").val();
    var addressLine1 = $("#modalEdit #addressLine1").val();
    var addressLine2 = $("#modalEdit #addressLine2").val();
    // alert(id+", "+rownum+", "+country);
    if (city!='' && phone!='' && state!='' && country!=''  && postalcode!=''  && territory!=''  && addressLine1!=''  && addressLine2!='') {

      $.ajax({
        type:'post',
        url:'<?=base_url()?>office/update_office',
        data: {id:id,city:city,phone:phone,state:state,country:country,postalcode:postalcode,territory:territory,addressLine1:addressLine1,addressLine2:addressLine2},
        success:function(data){
         Swal.fire({
                title: 'SUCCESSFULLY UPDATED',
                text: "",
                icon: 'success',
                // showCancelButton: true,
                confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                confirmButtonText: 'OK!'
              }).then((result) => {

                window.location.href='<?=base_url()?>office/view_offices'
              })
            data=JSON.parse(data);


          if(data.result=='SUCCESS'){
            window.location.href='<?=base_url()?>office/view_offices';
          }else if (data.result=="FAILED"){
            alert(data.msg);
          }
        },
        error:function(xhr,status,error){
          alert(xhr.responseText);
        }
      })
    }
  }


  function deleteOffice(obj,id){
    var row=obj.closest('tr');
    var rownum=parseInt(row.rowIndex);

        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
      if (result.isConfirmed) {

        $.ajax({
          type:'post',
          url:'<?=base_url()?>office/delete_office',
          data: {id:id},
          success:function(data){
              Swal.fire({
                title: 'SUCCESSFULLY DELETED',
                text: "",
                icon: 'success',
                // showCancelButton: true,
                confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                confirmButtonText: 'OK!'
              }).then((result) => {

                window.location.href='<?=base_url()?>office/view_offices'
              })
            data=JSON.parse(data);


            if(data.result=='SUCCESS'){

             Swal.fire({
                title: 'SUCCESSFULLY DELETED',
                text: "",
                icon: 'success',
                // showCancelButton: true,
                confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                confirmButtonText: 'OK!'
              }).then((result) => {

                window.location.href='<?=base_url()?>office/view_offices'
              })


            }else if (data.result=="FAILED"){
              alert(data.msg);
            }
          },
          error:function(xhr,status,error){
            alert(xhr.responseText);
          }
        })


      }
    })
  }
  

  
</script> -->
</body>
</html>
