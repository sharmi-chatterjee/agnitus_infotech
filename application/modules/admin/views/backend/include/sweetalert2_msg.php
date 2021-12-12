<script>

function call_message(){
	var msgType     = '<?php echo $this->session->userdata('msgType');?>';
	var success_msg = '<?php echo $this->session->userdata('success_msg');?>';

	

	if( msgType == '1' ){ // for success		
		Swal.fire({
		  icon: 'success',
		  title: 'Success!',
		  text: success_msg,
		  animation: false,
		})		

	}

	if( msgType == '2' ){ // for error		
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: success_msg,
		  animation: false,

		})			
	}
}



function confirm_delete(url){	
	Swal.fire({
		title: 'Are you sure?',
		text: "You want to delete selected item(s)",
		icon: 'warning',
		animation: false,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: 'No, cancel!', 

	}).then((result) => {
		if (result.value) {
			location.href = url;
		}
	})

}



function confirm_delete_all(action,FrmId){	
	if( action && action == 'Delete' ){	
		Swal.fire({
			title: 'Are you sure?',
			text: "You want to delete selected item(s)",
			icon: 'warning',
			animation: false,
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!',
			cancelButtonText: 'No, cancel!', 
		}).then((result) => {
			if (result.value) {
				document.getElementById(FrmId).submit();
			}
		})
	}

	else{		
		document.getElementById(FrmId).submit();
	}

	

}




function show_msg($val){
	swal({
        title: "Are you sure?",
        text: $val,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false 
    },
    function(isConfirm) {
        if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    }
);
}
</script>