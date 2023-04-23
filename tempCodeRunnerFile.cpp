#include <iostream>
using namespace std;

int main() {
	int t;
	cin>>t;
	
	while(t-- > 0)
	{
	    int cnt=0;;
	    int num;
	    cin>>num;
	    int arr[num];
	    for(int i=0; i<num; i++)
	    {
	        for(int j=i+1; j<num; j++)
	        {
	            if(arr[i] == arr[j]){
	            cnt++;
	            }
	        }
	    }
	    if(cnt > 0)
	    cout<<"YES"<<endl;
	    else
	    cout<<"NO"<<endl;
	}
	return 0;
}
