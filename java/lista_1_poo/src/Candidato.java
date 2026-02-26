// Desenvolvido por: Victor Gabryel da Silva
// Matrícula: 01682442
// Turma: 2MB

public class Candidato {

    //Atributos
    private int num_cand;
    private int votos_cand;
    private String nome_cand;
    private int cont;


    //Constructor
    public Candidato(int num_cand, String nome_cand) {
        this.num_cand = num_cand;
        this.nome_cand = nome_cand;
        this.votos_cand = 0;
    }


    //Métodos Getters
    public int getNum_cand() {
        return num_cand;
    }

    public int getVotos_cand() {
        return votos_cand;
    }

    public String getNome_cand() {
        return nome_cand;
    }
    
    //Método para Votar
    public void votos_cand(){
        this.votos_cand = this.votos_cand + 1;
    }
}

// Desenvolvido por: Victor Gabryel da Silva
// Matrícula: 01682442
// Turma: 2MB