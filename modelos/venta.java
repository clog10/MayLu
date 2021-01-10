package modelos;

import java.text.DecimalFormat;
import java.util.Date;

public class venta {
    private Date fecha;
    private DecimalFormat total;
    private DecimalFormat recibido;
    private DecimalFormat cambio;
    private int modelo;
    private int id_usuario;

    public venta(Date fecha, DecimalFormat total, DecimalFormat recibido, DecimalFormat cambio, int modelo,
            int id_usuario) {
        this.setFecha(fecha);
        this.setTotal(total);
        this.setRecibido(recibido);
        this.setCambio(cambio);
        this.setModelo(modelo);
        this.setId_usuario(id_usuario);
    }

    public venta() {

    }

    public Date getFecha() {
        return fecha;
    }

    public void setFecha(Date fecha) {
        this.fecha = fecha;
    }

    public DecimalFormat getTotal() {
        return total;
    }

    public void setTotal(DecimalFormat total) {
        this.total = total;
    }

    public DecimalFormat getRecibido() {
        return recibido;
    }

    public void setRecibido(DecimalFormat recibido) {
        this.recibido = recibido;
    }

    public DecimalFormat getCambio() {
        return cambio;
    }

    public void setCambio(DecimalFormat cambio) {
        this.cambio = cambio;
    }

    public int getModelo() {
        return modelo;
    }

    public void setModelo(int modelo) {
        this.modelo = modelo;
    }

    public int getId_usuario() {
        return id_usuario;
    }

    public void setId_usuario(int id_usuario) {
        this.id_usuario = id_usuario;
    }

}
