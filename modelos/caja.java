package modelos;

import java.text.DecimalFormat;



public class caja {
    private int id_caja;
    private String nombre_codigo;
    private DecimalFormat efectivo;

    public caja(int id_caja, String nombre_codigo, DecimalFormat efectivo){
        this.id_caja= id_caja;
        this.nombre_codigo= nombre_codigo;
        this.efectivo= efectivo;
    }
    public caja(){

    }

    public int getId_caja(){
        return id_caja;
    }
    public void setId_caja(int id_caja) {
        this.id_caja=id_caja;
    }
    public String getNombre_codigo(){
        return nombre_codigo;
    }
    public void setNombre_codigo(String nombre_codigo) {
        this.nombre_codigo= nombre_codigo;
    }
    public DecimalFormat getEfectivo() {
        return efectivo;
    }
    public void setEfectivo( DecimalFormat efectivo) {
        this.efectivo= efectivo;
    }
    @Override
    public String toString(){
        return nombre_codigo;

    }

    
}
