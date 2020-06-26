@managedBean(name = "beanObjeto")
@ApplicationScopped
public class Objeto implements Serializable{
    private String atributo;
private String resposta;

    public void metodo(){
        resposta="Seja bem vindo".concat(atributo);
    }
}
//Getter and Setter