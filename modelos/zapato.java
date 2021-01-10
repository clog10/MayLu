package modelos;

import java.sql.Blob;
import java.text.DecimalFormat;

public class zapato {
    private int id_zapato;
    private String modelo;
    private int proveedor;
    private int talla;
    private String color;
    private DecimalFormat precio_compra;
    private DecimalFormat precio_venta;
    private int descuento;
    private int stock;
    private Blob img;

    public zapato(int id_zapato, String modelo, int proveedor, int talla, String color, DecimalFormat precio_compra,
            DecimalFormat precio_venta, int descuento, int stock, Blob img) {
        this.setId_zapato(id_zapato);
        this.setModelo(modelo);
        this.setProveedor(proveedor);
        this.setTalla(talla);
        this.setColor(color);
        this.setPrecio_compra(precio_compra);
        this.setPrecio_venta(precio_venta);
        this.setDescuento(descuento);
        this.setStock(stock);
        this.setImg(img);
    }

    public zapato() {

    }

    public int getId_zapato() {
        return id_zapato;
    }

    public void setId_zapato(int id_zapato) {
        this.id_zapato = id_zapato;
    }

    public String getModelo() {
        return modelo;
    }

    public void setModelo(String modelo) {
        this.modelo = modelo;
    }

    public int getProveedor() {
        return proveedor;
    }

    public void setProveedor(int proveedor) {
        this.proveedor = proveedor;
    }

    public int getTalla() {
        return talla;
    }

    public void setTalla(int talla) {
        this.talla = talla;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    public DecimalFormat getPrecio_compra() {
        return precio_compra;
    }

    public void setPrecio_compra(DecimalFormat precio_compra) {
        this.precio_compra = precio_compra;
    }

    public DecimalFormat getPrecio_venta() {
        return precio_venta;
    }

    public void setPrecio_venta(DecimalFormat precio_venta) {
        this.precio_venta = precio_venta;
    }

    public int getDescuento() {
        return descuento;
    }

    public void setDescuento(int descuento) {
        this.descuento = descuento;
    }

    public int getStock() {
        return stock;
    }

    public void setStock(int stock) {
        this.stock = stock;
    }

    public Blob getImg() {
        return img;
    }

    public void setImg(Blob img) {
        this.img = img;
    }

    @Override
    public String toString() {
        return modelo;
    }

}