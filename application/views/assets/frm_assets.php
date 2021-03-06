<?php get_header(); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#date" ).datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<div class="body">
    <div class="content">
        <h2 class="rama-title">Form Asset</h2>
        <?php echo $this->session->flashdata('message'); ?>
        <?php echo form_open($form_action) . form_hidden('id', $id); ?>
        <table>
            <tr>
                <td>Asset Name</td>
                <td><?php echo form_input($asset_name); ?></td>
            </tr>
            <tr>
                <td>Asset Status</td>
                <td><?php echo $asset_status; ?></td>
            </tr>
            <tr>
                <td>Staff</td>
                <td><?php echo $staff_id; ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><?php echo form_input($date); ?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo form_submit($btn_save) . ' ' . $link_back; ?></td>
            </tr>
        </table>
        <?php echo form_close() ?>
    </div>
</div>
<?php get_footer(); ?>
