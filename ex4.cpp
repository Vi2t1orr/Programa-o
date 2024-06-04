#include <iostream>
#include <string>

class Aluno {
private:
    std::string nome;
    int matricula;
    float n1, n2, n3;

public:
    Aluno() {}

    Aluno(std::string n, int m, float n1, float n2, float n3)
        : nome(n), matricula(m), n1(n1), n2(n2), n3(n3) {}

    float calculamedia() {
        return (n1 + n2 + n3) / 3;
    }

    void imprimir() {
        std::cout << "Nome: " << nome << "\nMatrícula: " << matricula << "\nMédia: " << calculamedia() << std::endl;
      if (calculamedia() >= 6){
        std::cout << "O aluno "<< nome << " está aprovado" << std::endl;
      } else {
        std::cout <<  "O aluno "<< nome << "está reprovado" << std::endl;
        
      }
    }
};

int main() {
    std::string nome;
    int matricula;
    float n1, n2, n3;

    std::cout << "Digite o nome do aluno: ";
    std::cin >> nome;
    std::cout << "Digite a matrícula do aluno: ";
    std::cin >> matricula;
    std::cout << "Digite a 1ª do aluno: ";
    std::cin >> n1;
    std::cout << "Digite a 2ª do aluno: ";
    std::cin >> n2;
    std::cout << "Digite a 3ª do aluno: ";
    std::cin >> n3;

    Aluno aluno(nome, matricula, n1, n2, n3);
    aluno.imprimir();

    std::cout << "batata é bom" << std::endl;

    return 0;
}
