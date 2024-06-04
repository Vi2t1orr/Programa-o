#include <iostream>
#include <string>


class contabancaria{
private:
    std::string nome;
    int numero;
    float saldo;

public:   
    contabancaria() {}
    contabancaria(std::string n, int num, float s)
        : nome(n), numero(num), saldo(s) {}

    void exibeDados() const {
        std::cout << "\n= = = = = = = = = = = = =\n";
        std::cout << "O Nome do titular é: " << nome << std::endl;
        std::cout << "O Número da conta é: " << numero << std::endl;
        std::cout << "O saldo atual é de: " << saldo << std::endl;
        std::cout << "\n= = = = = = = = = = = = =\n";
    }

    void deposito(float valor) {
        saldo += valor;
    }

   void saque(float valor) {
        if (valor <= saldo) {
            saldo -= valor;
        } else {
            std::cout << "Saldo insuficiente para saque!" << std::endl;
        }
    }

    float getSaldo() const {
        return saldo;
    }
};

int main(){
    std::string nome;
    int numero;
    float saldo;

    std::cout << "\n= = = = = = = = = = = = =\n";
    std::cout << "Digite o nome do titular: ";
    std::cin >> nome;
    std::cout << "Digite o número da conta: ";
    std::cin >> numero;
    std::cout << "Digite o saldo inicial: ";
    std::cin >> saldo;

    contabancaria conta(nome, numero, saldo);

    conta.exibeDados();

    float valor;
    std::cout << "Digite o valor para depósito: ";
    std::cin >> valor;
    conta.deposito(valor);
    std::cout << "Novo saldo: " << conta.getSaldo() << std::endl;

    std::cout << "Digite o valor para saque: ";
    std::cin >> valor;
    conta.saque(valor);
    std::cout << "Novo saldo: " << conta.getSaldo() << std::endl;

    
    return 0;
}
