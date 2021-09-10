<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Index on departmenr admin

    <div class="container">
        <div class="col-md-8">            
            <div class="card">
                <div class="card-header">ตารางแสดงข้อมูล</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">แบบฟอร์ม
                    <form action="{{route('addDepartment')}}" method="post">
                        @csrf 
                        <label for="">ตำแหน่งงาน</label>
                        <input type="text" class="form-control" name="department_name">
                        <input type="submit" class="form-control btn btn-primary" value="บันทึก">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>