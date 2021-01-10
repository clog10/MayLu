package modelos;

public class proveedor {

    private int id_proveedor;
    private String nombre_empresa;
    private String nombre_agente;
    private String direccion;
    private int tel;
    private String email;

    public proveedor(int id_proveedor, String nombre_empresa, String nombre_agente, String direccion, int tel,
            String email) {
        this.setId_proveedor(id_proveedor);
        this.setNombre_empresa(nombre_empresa);
        this.setNombre_agente(nombre_agente);
        this.setDireccion(direccion);
        this.setTel(tel);
        this.setEmail(email);
    }

    public proveedor() {

    }

    public int getId_proveedor() {
        return id_proveedor;
    }

    public void setId_proveedor(int id_proveedor) {
        this.id_proveedor = id_proveedor;
    }

    public String getNombre_empresa() {
        return nombre_empresa;
    }

    public void setNombre_empresa(String nombre_empresa) {
        this.nombre_empresa = nombre_empresa;
    }

    public String getNombre_agente() {
        return nombre_agente;
    }

    public void setNombre_agente(String nombre_agente) {
        this.nombre_agente = nombre_agente;
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

}