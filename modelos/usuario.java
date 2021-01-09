package modelos;

public class usuario {
    private int id_usuario;
    private String nombre_com;
    private String puesto;
    private int id_caja;
    private String genero;
    private String direccion;
    private int tel;
    private String email;
    private String usuario;
    private String contraseña;

    public usuario(int id_usuario, String nombre_com, String puesto, int id_caja, String genero, String direccion,
            int tel, String email, String usuario, String contraseña) {
        this.setId_usuario(id_usuario);
        this.setNombre_com(nombre_com);
        this.setPuesto(puesto);
        this.setId_caja(id_caja);
        this.setGenero(genero);
        this.setDireccion(direccion);
        this.setTel(tel);
        this.setEmail(email);
        this.setUsuario(usuario);
        this.setContraseña(contraseña);
    }
    public usuario(){
        
    }

    public int getId_usuario() {
        return id_usuario;
    }

    public void setId_usuario(int id_usuario) {
        this.id_usuario = id_usuario;
    }

    public String getNombre_com() {
        return nombre_com;
    }

    public void setNombre_com(String nombre_com) {
        this.nombre_com = nombre_com;
    }

    public String getPuesto() {
        return puesto;
    }

    public void setPuesto(String puesto) {
        this.puesto = puesto;
    }

    public int getId_caja() {
        return id_caja;
    }

    public void setId_caja(int id_caja) {
        this.id_caja = id_caja;
    }

    public String getGenero() {
        return genero;
    }

    public void setGenero(String genero) {
        this.genero = genero;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public int getTel() {
        return tel;
    }

    public void setTel(int tel) {
        this.tel = tel;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getUsuario() {
        return usuario;
    }

    public void setUsuario(String usuario) {
        this.usuario = usuario;
    }

    public String getContraseña() {
        return contraseña;
    }

    public void setContraseña(String contraseña) {
        this.contraseña = contraseña;
    }
    
}
