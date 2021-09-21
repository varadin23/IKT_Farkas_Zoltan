using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace hegy_op
{
    class Program
    {
        static void Main(string[] args)
        {
            StreamReader sr = new StreamReader("hegyekMo.txt");
            List<Hegy> lista = new List<Hegy>();
            sr.ReadLine();
            while(!sr.EndOfStream)
            {
                lista.Add(new Hegy(sr.ReadLine()));

            }
            Console.WriteLine("Feladat 1:"+lista.Count);

            double sum = 0;
            foreach(var item in lista)
            {
                sum = sum + item.magasság;
            }
            Console.WriteLine("Feladat 2:" + sum / lista.Count);

            //Feladat3
            int max = lista[0].magasság;
            int id = 0;
            for (int i=0; i<lista.Count; i++)
            {
                if(lista[i].magasság>max)
                {
                    max = lista[i].magasság;
                    id = i;
                }
            }
            Console.WriteLine(lista[id].csucsnev+"/n"+lista[id].hegy+"/n"+lista[id].magasság);

            //feladat 4
            Console.Write("Kérek egy egész számot: ");
            m = int.Parse(Console.ReadLine());
            bool van = false;

            for(int i=0; i<lista.Count;i++)
            {
                if (lista[i].magasság>m)
                {
                    van =true;
                    id2 = i;
                    break;
                }
            }
            if(van)
            {
                Console.WriteLine("Van magasbb csúcs a {0}!",lista[id2].csucsnev);
            }
            else
            {
                Console.WriteLine("Nincs Találat");
            }
        }
        }
    }
}
