using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Chitietlop
    public class Chitietlop
    {
        #region Member Variables
        protected int _maLop;
        protected int _maHocSinh;
        #endregion
        #region Constructors
        public Chitietlop() { }
        public Chitietlop(int maLop)
        {
            this._maLop=maLop;
        }
        #endregion
        #region Public Properties
        public virtual int MaLop
        {
            get {return _maLop;}
            set {_maLop=value;}
        }
        public virtual int MaHocSinh
        {
            get {return _maHocSinh;}
            set {_maHocSinh=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Chucvu
    public class Chucvu
    {
        #region Member Variables
        protected int _IDChucVu;
        protected string _MoTa;
        #endregion
        #region Constructors
        public Chucvu() { }
        public Chucvu(string MoTa)
        {
            this._MoTa=MoTa;
        }
        #endregion
        #region Public Properties
        public virtual int IDChucVu
        {
            get {return _IDChucVu;}
            set {_IDChucVu=value;}
        }
        public virtual string MoTa
        {
            get {return _MoTa;}
            set {_MoTa=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region De
    public class De
    {
        #region Member Variables
        protected int _maDe;
        protected DateTime _ngayLam;
        protected DateTime _hanNop;
        protected int _maKhoi;
        protected int _maMonHoc;
        #endregion
        #region Constructors
        public De() { }
        public De(DateTime ngayLam, DateTime hanNop, int maKhoi, int maMonHoc)
        {
            this._ngayLam=ngayLam;
            this._hanNop=hanNop;
            this._maKhoi=maKhoi;
            this._maMonHoc=maMonHoc;
        }
        #endregion
        #region Public Properties
        public virtual int MaDe
        {
            get {return _maDe;}
            set {_maDe=value;}
        }
        public virtual DateTime NgayLam
        {
            get {return _ngayLam;}
            set {_ngayLam=value;}
        }
        public virtual DateTime HanNop
        {
            get {return _hanNop;}
            set {_hanNop=value;}
        }
        public virtual int MaKhoi
        {
            get {return _maKhoi;}
            set {_maKhoi=value;}
        }
        public virtual int MaMonHoc
        {
            get {return _maMonHoc;}
            set {_maMonHoc=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Giaovien
    public class Giaovien
    {
        #region Member Variables
        protected int _maGiaoVien;
        protected string _tenGiaoVien;
        protected string _anhDaiDien;
        protected unknown _ngaySinh;
        protected string _diaChi;
        protected string _CCCD;
        protected string _email;
        protected int _IDChucVu;
        protected int _maMonHoc;
        protected string _matKhau;
        #endregion
        #region Constructors
        public Giaovien() { }
        public Giaovien(string tenGiaoVien, string anhDaiDien, unknown ngaySinh, string diaChi, string CCCD, string email, int IDChucVu, int maMonHoc, string matKhau)
        {
            this._tenGiaoVien=tenGiaoVien;
            this._anhDaiDien=anhDaiDien;
            this._ngaySinh=ngaySinh;
            this._diaChi=diaChi;
            this._CCCD=CCCD;
            this._email=email;
            this._IDChucVu=IDChucVu;
            this._maMonHoc=maMonHoc;
            this._matKhau=matKhau;
        }
        #endregion
        #region Public Properties
        public virtual int MaGiaoVien
        {
            get {return _maGiaoVien;}
            set {_maGiaoVien=value;}
        }
        public virtual string TenGiaoVien
        {
            get {return _tenGiaoVien;}
            set {_tenGiaoVien=value;}
        }
        public virtual string AnhDaiDien
        {
            get {return _anhDaiDien;}
            set {_anhDaiDien=value;}
        }
        public virtual unknown NgaySinh
        {
            get {return _ngaySinh;}
            set {_ngaySinh=value;}
        }
        public virtual string DiaChi
        {
            get {return _diaChi;}
            set {_diaChi=value;}
        }
        public virtual string CCCD
        {
            get {return _CCCD;}
            set {_CCCD=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual int IDChucVu
        {
            get {return _IDChucVu;}
            set {_IDChucVu=value;}
        }
        public virtual int MaMonHoc
        {
            get {return _maMonHoc;}
            set {_maMonHoc=value;}
        }
        public virtual string MatKhau
        {
            get {return _matKhau;}
            set {_matKhau=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Hocsinh
    public class Hocsinh
    {
        #region Member Variables
        protected int _maHocSinh;
        protected string _tenHocSinh;
        protected string _anhDaiDien;
        protected int _IDChucVu;
        protected unknown _ngaySinh;
        protected string _diaChi;
        protected string _email;
        protected string _SDT;
        protected unknown _gioiTinh;
        protected string _matKhau;
        #endregion
        #region Constructors
        public Hocsinh() { }
        public Hocsinh(string tenHocSinh, string anhDaiDien, int IDChucVu, unknown ngaySinh, string diaChi, string email, string SDT, unknown gioiTinh, string matKhau)
        {
            this._tenHocSinh=tenHocSinh;
            this._anhDaiDien=anhDaiDien;
            this._IDChucVu=IDChucVu;
            this._ngaySinh=ngaySinh;
            this._diaChi=diaChi;
            this._email=email;
            this._SDT=SDT;
            this._gioiTinh=gioiTinh;
            this._matKhau=matKhau;
        }
        #endregion
        #region Public Properties
        public virtual int MaHocSinh
        {
            get {return _maHocSinh;}
            set {_maHocSinh=value;}
        }
        public virtual string TenHocSinh
        {
            get {return _tenHocSinh;}
            set {_tenHocSinh=value;}
        }
        public virtual string AnhDaiDien
        {
            get {return _anhDaiDien;}
            set {_anhDaiDien=value;}
        }
        public virtual int IDChucVu
        {
            get {return _IDChucVu;}
            set {_IDChucVu=value;}
        }
        public virtual unknown NgaySinh
        {
            get {return _ngaySinh;}
            set {_ngaySinh=value;}
        }
        public virtual string DiaChi
        {
            get {return _diaChi;}
            set {_diaChi=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string SDT
        {
            get {return _SDT;}
            set {_SDT=value;}
        }
        public virtual unknown GioiTinh
        {
            get {return _gioiTinh;}
            set {_gioiTinh=value;}
        }
        public virtual string MatKhau
        {
            get {return _matKhau;}
            set {_matKhau=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Khoi
    public class Khoi
    {
        #region Member Variables
        protected int _maKhoi;
        protected string _moTa;
        #endregion
        #region Constructors
        public Khoi() { }
        public Khoi(string moTa)
        {
            this._moTa=moTa;
        }
        #endregion
        #region Public Properties
        public virtual int MaKhoi
        {
            get {return _maKhoi;}
            set {_maKhoi=value;}
        }
        public virtual string MoTa
        {
            get {return _moTa;}
            set {_moTa=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Lop
    public class Lop
    {
        #region Member Variables
        protected int _maLop;
        protected string _tenLop;
        protected int _siSo;
        protected int _maKhoi;
        protected int _maTruong;
        #endregion
        #region Constructors
        public Lop() { }
        public Lop(string tenLop, int siSo, int maKhoi, int maTruong)
        {
            this._tenLop=tenLop;
            this._siSo=siSo;
            this._maKhoi=maKhoi;
            this._maTruong=maTruong;
        }
        #endregion
        #region Public Properties
        public virtual int MaLop
        {
            get {return _maLop;}
            set {_maLop=value;}
        }
        public virtual string TenLop
        {
            get {return _tenLop;}
            set {_tenLop=value;}
        }
        public virtual int SiSo
        {
            get {return _siSo;}
            set {_siSo=value;}
        }
        public virtual int MaKhoi
        {
            get {return _maKhoi;}
            set {_maKhoi=value;}
        }
        public virtual int MaTruong
        {
            get {return _maTruong;}
            set {_maTruong=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Lopdamnhan
    public class Lopdamnhan
    {
        #region Member Variables
        protected int _maLop;
        protected int _maGiaoVien;
        #endregion
        #region Constructors
        public Lopdamnhan() { }
        public Lopdamnhan(int maLop, int maGiaoVien)
        {
            this._maLop=maLop;
            this._maGiaoVien=maGiaoVien;
        }
        #endregion
        #region Public Properties
        public virtual int MaLop
        {
            get {return _maLop;}
            set {_maLop=value;}
        }
        public virtual int MaGiaoVien
        {
            get {return _maGiaoVien;}
            set {_maGiaoVien=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Monhoc
    public class Monhoc
    {
        #region Member Variables
        protected int _maMonHoc;
        protected string _tenMonHoc;
        #endregion
        #region Constructors
        public Monhoc() { }
        public Monhoc(string tenMonHoc)
        {
            this._tenMonHoc=tenMonHoc;
        }
        #endregion
        #region Public Properties
        public virtual int MaMonHoc
        {
            get {return _maMonHoc;}
            set {_maMonHoc=value;}
        }
        public virtual string TenMonHoc
        {
            get {return _tenMonHoc;}
            set {_tenMonHoc=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Ngạnhangcauhoitracnghiem
    public class Ngạnhangcauhoitracnghiem
    {
        #region Member Variables
        protected int _maCauHoi;
        protected int _maMonHoc;
        protected int _maKhoi;
        protected int _chuong;
        protected string _cauHoi;
        protected int _doKho;
        protected string _A;
        protected string _B;
        protected string _C;
        protected string _D;
        protected string _dapAn;
        protected unknown _trangThai;
        #endregion
        #region Constructors
        public Ngạnhangcauhoitracnghiem() { }
        public Ngạnhangcauhoitracnghiem(int maMonHoc, int maKhoi, int chuong, string cauHoi, int doKho, string A, string B, string C, string D, string dapAn, unknown trangThai)
        {
            this._maMonHoc=maMonHoc;
            this._maKhoi=maKhoi;
            this._chuong=chuong;
            this._cauHoi=cauHoi;
            this._doKho=doKho;
            this._A=A;
            this._B=B;
            this._C=C;
            this._D=D;
            this._dapAn=dapAn;
            this._trangThai=trangThai;
        }
        #endregion
        #region Public Properties
        public virtual int MaCauHoi
        {
            get {return _maCauHoi;}
            set {_maCauHoi=value;}
        }
        public virtual int MaMonHoc
        {
            get {return _maMonHoc;}
            set {_maMonHoc=value;}
        }
        public virtual int MaKhoi
        {
            get {return _maKhoi;}
            set {_maKhoi=value;}
        }
        public virtual int Chuong
        {
            get {return _chuong;}
            set {_chuong=value;}
        }
        public virtual string CauHoi
        {
            get {return _cauHoi;}
            set {_cauHoi=value;}
        }
        public virtual int DoKho
        {
            get {return _doKho;}
            set {_doKho=value;}
        }
        public virtual string A
        {
            get {return _A;}
            set {_A=value;}
        }
        public virtual string B
        {
            get {return _B;}
            set {_B=value;}
        }
        public virtual string C
        {
            get {return _C;}
            set {_C=value;}
        }
        public virtual string D
        {
            get {return _D;}
            set {_D=value;}
        }
        public virtual string DapAn
        {
            get {return _dapAn;}
            set {_dapAn=value;}
        }
        public virtual unknown TrangThai
        {
            get {return _trangThai;}
            set {_trangThai=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Thanhpho
    public class Thanhpho
    {
        #region Member Variables
        protected int _maThanhPho;
        protected string _tenThanhPho;
        #endregion
        #region Constructors
        public Thanhpho() { }
        public Thanhpho(string tenThanhPho)
        {
            this._tenThanhPho=tenThanhPho;
        }
        #endregion
        #region Public Properties
        public virtual int MaThanhPho
        {
            get {return _maThanhPho;}
            set {_maThanhPho=value;}
        }
        public virtual string TenThanhPho
        {
            get {return _tenThanhPho;}
            set {_tenThanhPho=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Elearning
{
    #region Truong
    public class Truong
    {
        #region Member Variables
        protected int _maTruong;
        protected string _tenTruong;
        protected string _diaChi;
        protected int _maThanhPho;
        #endregion
        #region Constructors
        public Truong() { }
        public Truong(string tenTruong, string diaChi, int maThanhPho)
        {
            this._tenTruong=tenTruong;
            this._diaChi=diaChi;
            this._maThanhPho=maThanhPho;
        }
        #endregion
        #region Public Properties
        public virtual int MaTruong
        {
            get {return _maTruong;}
            set {_maTruong=value;}
        }
        public virtual string TenTruong
        {
            get {return _tenTruong;}
            set {_tenTruong=value;}
        }
        public virtual string DiaChi
        {
            get {return _diaChi;}
            set {_diaChi=value;}
        }
        public virtual int MaThanhPho
        {
            get {return _maThanhPho;}
            set {_maThanhPho=value;}
        }
        #endregion
    }
    #endregion
}