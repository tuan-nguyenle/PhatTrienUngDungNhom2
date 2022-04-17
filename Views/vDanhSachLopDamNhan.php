<div class='col py-3'>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col" class="col-1">Mã Lớp</th>
                <th scope="col" class="col-1">Tên Lớp</th>
                <th scope="col" class="col-2">Số Học Sinh</th>
                <th scope="col" class="col-2">Tên Trường</th>
                <th scope="col" class="col-3">Địa Chỉ</th>
                <th scope="col" class="col-2">Tên Thành Phố</th>
                <th scope="col" class="col-1">Chi Tiết</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $lopDamNhan = $giaoVien->getAllLopDamNhan();
            if (mysqli_num_rows($lopDamNhan) > 0) {
                while ($tbl = mysqli_fetch_assoc($lopDamNhan)) {
            ?>
                    <tr>
                        <td><?= $tbl['maLop'] ?></td>
                        <td><?= $tbl['tenLop'] ?></td>
                        <td><?= $tbl['siSo'] ?></td>
                        <td><?= $tbl['tenTruong'] ?></td>
                        <td><?= $tbl['diaChi'] ?></td>
                        <td><?= $tbl['tenThanhPho'] ?></td>
                        <td><a href="?dsachlop=<?= $tbl['maLop'] ?>">Link</a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>