@ManagedBean
public class TestBean {
    private int numero;
    public void setNumero (int numero) {
        this.numero = numero;
    }
    public int getNumero(){
        return  numero;
    }
    public void incrementaNumero(){
        this.numero = numero + 1;
    }
}