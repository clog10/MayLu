package modelos;

public class devolucion {
    private int id_devolucion;
    private int proveedor;
    private int zapato;

    public devolucion(int id_devolucion, int proveedor, int zapato) {
        this.id_devolucion = id_devolucion;
        this.proveedor = proveedor;
        this.zapato = zapato;
    }

    public devolucion() {

    }

    public int getId_devolucion() {
        return id_devolucion;
    }

    public void setId_devolucion(int id_devolucion) {
        this.id_devolucion = id_devolucion;
    }

    public int getProveedor() {
        return proveedor;
    }

    public void setProveedor(int proveedor) {
        this.proveedor = proveedor;
    }

    public int getZapato() {
        return zapato;
    }

    public void setZapato(int zapato) {
        this.zapato = zapato;
    }

}
