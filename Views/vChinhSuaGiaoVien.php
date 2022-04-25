<!-- Modal chỉnh sửa -->
<div id="editUser" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="update_form">
                <div class="modal-header">
                    <h4 class="modal-title">Chỉnh Sửa Giáo Viên</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Mã Tài Khoản</label>
                        <input type="text" id="maTaiKhoanGV" name="txtMaTaiKhoanGV" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label>Họ và Tên</label>
                        <input type="text" id="tenGV" name="txtTenGV" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Căn Cước Công Dân</label>
                        <input type="text" id="CCCDGV" name="txtCCCDGV" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày Sinh</label>
                        <input type="date" id="ngaySinhGv" name="txtNgaySinhGv" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="emailGV" name="txtEmailGV" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input type="phone" id="SDTGV" name="txtSDTGV" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" id="diaChiGV" name="txtDiaChiGV" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Mật Khẩu</label>
                        <input type="text" id="matKhauGV" name="txtMatKhauGV" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="2" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-info" id="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>