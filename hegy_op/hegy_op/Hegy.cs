using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace hegy_op
{
    class Hegy
    {
        public string csucsnev { get; private set; }
        public string hegy { get;private set; }
        public int magasság { get;private set; }

        public Hegy(string sor)
        {
            string[] darabol = sor.Split(';');
            csucsnev = darabol[0];
            hegy = darabol[1];
            magasság = Convert.ToInt32(darabol[2]);

        }
    }
}
