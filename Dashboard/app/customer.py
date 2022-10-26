import pandas as pd

class Customer:

    def __init__(self, customer_dict):
        self.customer_dict = customer_dict

    def get_as_df(self):
        return pd.DataFrame.from_dict(self.customer_dict)