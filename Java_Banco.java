import java.util.Scanner; 
public class ContaCorrente {
	public static void main (String [] args) {
		// uma conta
		Conta minhaConta = nova Conta ();
		minhaConta.saldo = 5000;
		System.out.println ("O saldo é de R $" + minhaConta.saldo);	
		System.out.println ("Olá, Deseja [1] sacar ou [2] depositar?");
		Scanner sc = novo Scanner (System.in); 
		int num = sc.nextInt (); 
		if ((num <1) || (num> 2)) {
			System.out.println ("Erro");
		}
		if (num == 1) {
			System.out.println ("Digite quanto deseja sacar");
			Scanner cs = novo Scanner (System.in); 
			int valor = sc.nextInt (); 
			if ((valor> minhaConta.saldo)) {
				lançar novo IllegalArgumentException ("Impossivel concluir. Erro 404");
			} 
			senão {

				Sacar (valor);

		}

		}
		if (num == 2) {
			System.out.println ("Digite quanto deseja depositar");
			Scanner ds = novo Scanner (System.in); 
			int valor = sc.nextInt (); 
			depositar (valor);
		}
}
public static void Sacar (float valor) {
		Conta minhaConta = nova Conta ();
		minhaConta.saldo = 5000;
		minhaConta.saldo = minhaConta.saldo - valor;
		System.out.println ("Saldo Atual:");
		System.out.print (minhaConta.saldo);
}
public static void depositar (float valor) {
	Conta minhaConta = nova Conta ();
	minhaConta.saldo = 5000;
	minhaConta.saldo = minhaConta.saldo + valor;
	System.out.println ("Saldo Atual:");
	System.out.print (minhaConta.saldo);
		}
}





// declaração das variaveis 

public class Conta {
		float saldo; 
		int valor;
		int num; 
		float Sacar;
		float depositar; 


}
