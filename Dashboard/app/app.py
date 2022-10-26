from multiprocessing.sharedctypes import Value
import sys
from predictor import Predictor
from customer import Customer

cmd_args = sys.argv[1]

cmd_args = cmd_args[1:-1]

customer_dict = dict((key.strip(), [int(value.strip())])
                     for key, value in (element.split(':') for element in cmd_args.split(',')))

new_customer = Customer(customer_dict)

predictor = Predictor(new_customer)

is_churn = predictor.run_pipeline()

print(is_churn)
