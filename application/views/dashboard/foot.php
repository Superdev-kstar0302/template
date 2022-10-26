</main><!-- End #main -->
<script>
	function backup_now() {
		console.log("backup_now");
		$.ajax({
	        url: "<?=base_url('home/setbackup')?>",
	        method: "POST",
	        success: function(res) {
	            console.log(res);
	        },
	        error: function(res1, res2) {
	        	console.log("Error");
	        	console.log(res1, res2);
	        }
	    });
	}
	function restore_now() {
		console.log("restore_now");
		const filename = $("#restore_picker").val();
		$.ajax({
	        url: "<?=base_url('home/restore/')?>"+filename,
	        method: "POST",
	        success: function(res) {
	            console.log(res);
	        },
	        error: function(res1, res2) {
	        	console.log("Error");
	        	console.log(res1, res2);
	        }
	    });
	}
	function download() {
		console.log("download");
		const filename = $("#restore_picker").val();
		$("#download").attr("href", "<?=base_url('home/download/')?>"+filename);
		$("#download")[0].click();
	}
	function save_setting() {
		console.log("save_setting");
		const period = $("#backup_period").val();
		const backup_date = $("#backup_date").val();
		const data = backup_date.split(':');

		console.log(backup_date);

		const form_data = {
	        period: period, 
	        hou: data[0],
	        min: data[1],
	    };
		$.ajax({
	        url: "<?=base_url('home/backup_schedule')?>", 
	        data: form_data, 
	        method: "POST", 
	        success: function(res) {
	            console.log(res);
	        },
	        error: function(res1, res2) {
	        	console.log("Error");
	        	console.log(res1, res2);
	        }
	    });
	}
</script>