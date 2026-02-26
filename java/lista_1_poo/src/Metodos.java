// Desenvolvido por: Victor Gabryel da Silva
// Matrícula: 01682442
// Turma: 2MB

import java.util.ArrayList;
import java.util.Scanner;

public class Metodos {
    

    private ArrayList<Candidato> candidatos;

    public Metodos(){
        candidatos = new ArrayList<>();
    }


    //Método para LimparTela
    public void LimparTela(){
        try {
            new ProcessBuilder("cmd", "/c", "cls").inheritIO().start().waitFor();
        } catch (Exception e) {
            e.printStackTrace();
        }
    } 


    //Método para chamar o menu 
    public void Cabecalho(Scanner scanner) {
        LimparTela();
        System.out.println("========================");
        System.out.println("          Urna          ");
        System.out.println("========================");
        System.out.println("");
        System.out.println("1 - Cadastrar Candidato");
        System.out.println("2 - Buscar Candidato");
        System.out.println("3 - Votar em Candidato");
        System.out.println("4 - Encerrar Programa");
        System.out.println("");
        System.out.print("Escolha sua opcão: ");
        int opc = scanner.nextInt();

        if (opc > 4 || opc < 1) {
              System.out.println("[ERRO!] Digite uma opção valída");
              Cabecalho(scanner);
        } else {
            switch (opc) {
                case 1:
                    LimparTela();
                    CadastrarCandidato(scanner);
                    LimparTela();
                    Cabecalho(scanner);
                    break;
                case 2:
                    LimparTela();
                    BuscarCand(scanner);
                    Cabecalho(scanner);
                    break;
                case 3:
                    LimparTela();
                    VotarCand(scanner);
                    Cabecalho(scanner);
                    break;
                case 4:
                    LimparTela();
                    EncerProg();
                    break;
                default:
                    
                    break;
            }
        }
    }


    //Método CadastrarCandidato
    public void CadastrarCandidato(Scanner scanner){

        System.out.print("Digite o número do candidato: ");
        int numero = scanner.nextInt();
        scanner.nextLine();

        System.out.print("Digite o nome do candidato: ");
        String nome = scanner.nextLine();

        Candidato candidato = new Candidato(numero,nome);
        candidatos.add(candidato);

        System.out.println();
        System.out.print("[Candidato cadastrado com sucesso!]");
        scanner.nextLine();
    }


    //Método BuscarCandidato
    public void BuscarCand(Scanner scanner){
        System.out.print("Digite o número do Candidato que você quer Buscar: ");
        int num_do_cand = scanner.nextInt();
        System.out.println();
        

        for (Candidato candidato : candidatos) {
            if (candidato.getNum_cand() == num_do_cand) {
                LimparTela();

                System.out.println("========================");
                System.out.println("          Urna          ");
                System.out.println("========================");

                System.out.println();

                System.out.println("Nome do candidato: " + candidato.getNome_cand());
                System.out.println("Número do candidato: " + candidato.getNum_cand());
                System.out.print("O candidato tem: " + candidato.getVotos_cand() + " votos");
            }
        }

        scanner.nextLine();
        String nome = scanner.nextLine();
        LimparTela();
    } 


    //Método VotarCandidato
    public void VotarCand(Scanner scanner){
        System.out.print("Digite o número do Candidato que você quer votar: ");
        int res = scanner.nextInt();
        System.out.println();

        for (Candidato candidato : candidatos) {
            if (candidato.getNum_cand() == res) {

                LimparTela();

                System.out.println("========================");
                System.out.println("          Urna          ");
                System.out.println("========================");

                System.out.println();

                System.out.println("Nome do candidato: " + candidato.getNome_cand());
                System.out.println("Número do candidato: " + candidato.getNum_cand());
                
                System.out.println("");
                System.out.println("1 - Confirmar voto");
                System.out.println("2 - Voltar ao menu");
                System.out.println();
                System.out.print("Escolha sua opcão: ");
                int res1 = scanner.nextInt();

                if (res1 == 1) {
                    candidato.votos_cand();
                    System.out.println();
                    System.out.print("Seu candidato tem " + candidato.getVotos_cand() + " votos atualmente");
                } else {
                    Cabecalho(scanner);
                }
            } 
        }
        scanner.nextLine();
        String nome = scanner.nextLine();
    } 


    //Método EncerProg
    public void EncerProg() {

        System.out.println("========================");
        System.out.println("          Urna          ");
        System.out.println("========================");

        System.out.println();

        System.out.println("Candidatos Cadastrados:");

        System.out.println();

        for(Candidato candidato : candidatos){

            System.out.println("[___ Candidato: " + candidato.getNome_cand() + " ___]");
            System.out.println("Número do candidato: " + candidato.getNum_cand());
            System.out.println("Número total de votos: "+ candidato.getVotos_cand());
            System.out.println();
        }
    } 
}

// Desenvolvido por: Victor Gabryel da Silva
// Matrícula: 01682442
// Turma: 2MB