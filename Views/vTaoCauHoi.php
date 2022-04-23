<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<div class="col py-3">
    <form class="row g-3">
        <h3 class="text__center col-md-12" style="text-align: center;">Tạo câu hỏi</h3>
        <div class="col-md-12">
            <label for="Quantityquestion" class="form-label accordion-bod">Câu hỏi</label>
            <textarea type="text" cols="30" rows="5" class="form-control" name="myTextarea" id="editor" ></textarea>
        </div>
        <div class="col-md-6">
            <label for="inputTimel4" class="form-label">Đáp án A</label>
            <input type="input" class="form-control" id="inputTime11" name="txtDA1">
        </div>
        <div class="col-md-6">
            <label for="inputTimel4" class="form-label">Đáp án B</label>
            <input type="input" class="form-control" id="inputTime11" name="txtDA2">
        </div>
        <div class="col-md-6">
            <label for="inputTimel4" class="form-label">Đáp án C</label>
            <input type="input" class="form-control" id="inputTime11" name="txtDA3">
        </div>
        <div class="col-md-6">
            <label for="inputTimel4" class="form-label">Đáp án D</label>
            <input type="input" class="form-control" id="inputTime11" name="txtDA4">
        </div>
        <div class="col-md-6">
            <label for="dokho" class="form-label">Độ khó</label>
            <input type="number" class="form-control" id="dokho" name="doKho">
        </div>
        <div class="col-md-6">
            <label for="chapter" class="form-label">Chương</label>
            <input type="number" class="form-control" id="chapter" name="chuong">
        </div>
        <div class="col-md-6">
            <label for="answerright" class="form-label">Đáp án đúng</label>
            <input type="text" class="form-control" id="answerright" name="txtDADung">
        </div>
        <div class="col-md-6">
            <label for="answerright" class="form-label">Khối</label>
            <select class="form-select" aria-label="Default select example" name="txtKhoi">
                <option selected="">...</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        </div>
        <div class="col-12">
            <button type="button" class="btn btn-primary btn__taocauhoi"">
                Thêm câu hỏi
            </button>

        </div>
    </form>
</div>